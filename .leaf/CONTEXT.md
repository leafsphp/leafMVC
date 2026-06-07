# Leaf Project Context

This file contains the shared memory for this project.

All AI assistants working on this project should read this file before making changes. Treat it as the source of truth for project goals, architectural decisions, and conventions.

---

# AI Instructions

IMPORTANT:

Always read this file before performing any task.

Use it together with the project's code and generated context.

Do not ignore the decisions documented here unless explicitly instructed to do so.

When uncertain, prefer preserving existing patterns over introducing new ones.

When your work is complete:

1. Update recent changes.
2. Mark completed goals.
3. Summarize repetitive history instead of appending indefinitely.
4. Preserve important architectural decisions.
5. Keep this file concise.
6. Remove outdated information.
7. Avoid unnecessary duplication.
8. Prefer references to files over copying their contents.

---

# Project Summary

An empty Leaf MVC project.

The project focuses on simplicity, maintainability, and AI-assisted development.

---

# Current Goal

[This section should always describe the next thing the team is actively working on. Only one current goal should exist at a time.]

---

# Architecture

## General

* Simplicity is preferred over cleverness.
* Explicit code is preferred over magic.
* Features should remain easy for humans and AI to understand.

## Services

* Service classes are preferred for external APIs and business logic.
* Controllers should remain thin.
* Avoid placing complex logic inside controllers.

## Validation

* Request validation should happen as early as possible.

## Database

* Database schemas are defined in `app/database`.
* Schema files are the source of truth for relationships.

## Frontend

* [User selected] is the preferred frontend stack.
* If no frontend stack has been selected yet, ask the user whether they want Blade or React + Inertia.
* Tailwind is the primary styling system.
* shadcn/ui components are preferred when using React + Inertia [remove this line if not using React + Inertia]

---

# External Providers

Track important third-party providers here.

Structure:

```yaml
billing: stripe
email: resend-smtp
storage: local
analytics: posthog
payments: paystack
```

---

# Coding Conventions

* Keep controllers focused.
* Keep methods small and readable.
* Prefer service classes over duplicated logic.
* Reuse existing abstractions before introducing new ones.
* Follow existing naming patterns.

---

# Recent Changes

* [track your recent changes here in DESC order, maximum of 5 recents. Older changes should be summarized into Known Decisions or removed.]

---

# Known Decisions

* This is a Leaf MVC app, all important files are in the app directory.

---

# Current Goal

Get user direction on what this app is for

---

# Future Ideas

* Build app as user wants

---

# Notes

This file contains project memory.

Project structure, routes, controllers, models, capabilities, schema files, and other mechanical information should be obtained from the generated Leaf context.

Do not duplicate that information here.
