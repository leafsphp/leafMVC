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

_Ask the user what this app is for, then replace this line with the goal. This section should always describe the next thing the team is actively working on — only one current goal should exist at a time._

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

* Frontend stack: _not chosen yet — agent: ask the user whether they want Blade or React + Inertia, then record the choice here._
* Tailwind is the primary styling system.
* shadcn/ui components are preferred when using React + Inertia. _Agent: remove this line if the project does not use React + Inertia._

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

* _No changes yet — agent: track recent changes here, newest first, maximum of 5. Summarize older changes into Known Decisions or remove them._

---

# Known Decisions

* This is a Leaf MVC app, all important files are in the app directory.

---

# Future Ideas

* _None yet — agent: record ideas the user mentions but isn't building yet._

---

# Notes

This file contains project memory.

Project structure, routes, controllers, models, capabilities, schema files, and other mechanical information should be obtained from the generated Leaf context.

Do not duplicate that information here.
