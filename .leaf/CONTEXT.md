<!-- leaf.context v1 -->

# Project Context

This file is the shared memory for this project. Every AI assistant working here — Claude, Codex, Cursor, or anything else — reads it before making changes and writes useful knowledge back when finished. Treat it as the source of truth for goals, decisions, and conventions.

---

## Working With This File

Read this file before performing any task, together with the project's code and the generated Leaf context. Do not ignore the decisions documented here unless the user explicitly overrides them. When uncertain, prefer preserving existing patterns over introducing new ones.

Format rules, so every agent's edits stay compatible:

1. The first line of this file is its format marker. Never remove or edit it.
2. Sections are `##` headings. Keep them in their current order. Preserve sections you don't recognize — another agent may own them. You may add project-specific sections at the end.
3. A line wrapped in underscores is a placeholder. If it contains `agent:`, it is an instruction to you: act on it, then replace the line with real content (or delete it if it no longer applies).
4. Keep entries to a single line each where possible, so edits from different agents merge cleanly.
5. Never store secrets, keys, or tokens here. Refer to `.env` keys by name only.
6. Do not duplicate mechanical information (routes, models, structure, modules). That lives in the code and in `leaf context`. This file holds only what the code cannot say: goals, decisions, and the reasoning behind them.

When your work is complete:

1. Add a line to Recent Changes: `* YYYY-MM-DD — what changed (key files)`. Newest first, five entries maximum; fold older entries into Known Decisions or delete them.
2. If the Current Goal is done, note it in Recent Changes and replace the goal. If you don't know the next goal, ask the user. Exactly one current goal at a time.
3. Record lasting choices in Known Decisions as `* Decision — reasoning.` A decision without its why gets relitigated by the next agent.
4. Keep this file concise. Summarize instead of appending indefinitely, remove outdated information, and prefer references to files over copying their contents.

---

## Project Summary

An empty Leaf MVC project.

The project focuses on simplicity, maintainability, and AI-assisted development.

---

## Current Goal

_agent: ask the user what this app is for, then replace this line with the goal. This section always describes the one thing the team is actively working on._

---

## Architecture

### General

* Simplicity is preferred over cleverness.
* Explicit code is preferred over magic.
* Features should remain easy for humans and AI to understand.

### Services

* Service classes are preferred for external APIs and business logic.
* Controllers should remain thin.
* Avoid placing complex logic inside controllers.

### Validation

* Request validation should happen as early as possible.

### Database

* Database schemas are defined in `app/database`.
* Schema files are the source of truth for relationships.

### Frontend

* _agent: ask the user whether they want Blade or React + Inertia, then replace this line with the choice._
* Tailwind is the primary styling system.
* _agent: if the project uses React + Inertia, replace this line with "shadcn/ui components are preferred." Otherwise delete it._

---

## External Providers

_agent: when the user adopts a provider, replace this line with a yaml block mapping one provider per concern, for example `billing: stripe`, `email: resend-smtp`, `storage: local`._

---

## Coding Conventions

* Keep controllers focused.
* Keep methods small and readable.
* Prefer service classes over duplicated logic.
* Reuse existing abstractions before introducing new ones.
* Follow existing naming patterns.

---

## Recent Changes

* _agent: no changes yet. Track them here as `* YYYY-MM-DD — what changed (key files)`, newest first, five maximum._

---

## Known Decisions

* This is a Leaf MVC app — all important files are in the `app` directory.

---

## Future Ideas

* _agent: record ideas the user mentions but isn't building yet._
