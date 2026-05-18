# Graduate Employer Matcher

## Project Purpose

Graduate Employer Matcher is an MVP web app that helps a user find relevant graduate employers by selecting:

- a degree
- an area or location

The app returns employers in that area, filtered by how relevant they are to the selected degree.

The goal is to prove the core concept:

```text
degree + area -> simple backend logic -> relevant employers
```

This MVP is not trying to solve perfect employer data, exact local employer rankings, or complex recommendation logic yet.

## MVP Scope

The first version should be small and practical:

- accept a degree from the user
- accept an area from the user
- map the degree to a search term or job role
- call a jobs API using that search term and location
- group or rank results by employer
- show simple employer cards on the frontend

## Current MVP Decision

Use the API-driven approach with Laravel as a thin backend.

This means:

- no custom employer database for the first version
- use live jobs data to infer which employers are hiring
- keep Laravel responsible for API keys, routing, and simple matching logic
- keep the frontend focused on input controls and result cards

## Tech Stack

- Backend: Laravel
- Frontend: JavaScript
- Styling: Tailwind CSS
- Tooling: Node and Vite
- External data source: jobs API, likely Adzuna

## App Flow

1. User selects or enters a degree.
2. User selects or enters an area.
3. Frontend sends the request to Laravel.
4. Laravel maps the degree to a job search term.
5. Laravel calls the jobs API with the search term and location.
6. Laravel extracts employers from the returned jobs.
7. Laravel sorts or groups employers using simple MVP logic.
8. Frontend displays employer cards.

Example:

```text
Computer Science + Manchester
-> search term: software developer
-> API location: Manchester
-> employers hiring for relevant roles in Manchester
```

## Backend Logic

Laravel should expose an internal API endpoint for matching employers.

Suggested endpoint:

```text
POST /api/employer-matches
```

Suggested request:

```json
{
  "degree": "Computer Science",
  "area": "Manchester"
}
```

Suggested response:

```json
{
  "degree": "Computer Science",
  "area": "Manchester",
  "search_term": "software developer",
  "employers": [
    {
      "name": "Example Employer",
      "job_count": 5,
      "sample_roles": ["Graduate Software Developer", "Junior Developer"],
      "location": "Manchester"
    }
  ]
}
```

## Degree Mapping

Start with a simple hard-coded map. This can later move to config or a database.

Example mappings:

```php
[
    'Computer Science' => 'software developer',
    'Business' => 'business analyst',
    'Marketing' => 'marketing assistant',
    'Accounting' => 'trainee accountant',
    'Engineering' => 'graduate engineer',
    'Law' => 'paralegal',
    'Psychology' => 'assistant psychologist',
]
```

If a degree is not mapped, use a conservative fallback such as:

```text
graduate
```

or combine the degree with graduate:

```text
{degree} graduate
```

## Employer Ranking For MVP

Keep ranking simple:

- group jobs by employer/company name
- count how many matching jobs each employer has
- sort employers by job count descending
- include a few sample job titles for context

Do not over-engineer ranking yet.

## Frontend Requirements

The first screen should be the usable matcher, not a marketing landing page.

It should include:

- degree input or select
- area input
- search button
- loading state
- empty state
- error state
- employer result cards

Employer cards should show:

- employer name
- number of matching roles
- sample role titles
- location or area

## Environment Variables

The jobs API credentials should stay in Laravel environment variables, not frontend code.

For Adzuna, likely variables:

```env
ADZUNA_APP_ID=
ADZUNA_APP_KEY=
ADZUNA_COUNTRY=gb
```

## Future Database-Driven Option

A later version may store controlled data in the app:

- degrees
- industries
- employers
- locations
- degree-to-industry mappings
- employer-to-industry mappings

Possible database-driven flow:

1. degree -> industries
2. area -> employers
3. filter employers by industry
4. sort by size or relevance

This gives more control, but it is not needed for the MVP.

## Build Priorities

1. Replace the default Laravel starter screen with the matcher UI.
2. Add degree and area inputs.
3. Add a Laravel API route for employer matching.
4. Add a degree-to-search-term mapping.
5. Add an API client for the jobs API.
6. Group returned jobs by employer.
7. Display results as simple cards.
8. Add basic validation and useful error messages.

## Important Product Principle

This app should stay focused on proving:

```text
Can a graduate enter their degree and area and quickly see plausible local employers?
```

Avoid spending time on perfect data quality, complex matching, authentication, saved searches, dashboards, or admin tools until the core flow works.
