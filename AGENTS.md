# Agent Instructions

Before performing any task:

1. Read `.leaf/CONTEXT.md` for project goals and architectural decisions.
2. Use Leaf documentation:

- https://leafphp.dev/ai/SKILL.md
- https://leafphp.dev/llms.txt

3. Inspect the codebase and use `leaf context` when you need a concise map of the application's structure. Use the global `leaf` binary for every command (no `php` prefix — it forwards project commands automatically); `php leaf` only has project commands and `php leaf context` will fail.

4. When your work is complete, update `.leaf/CONTEXT.md`.
