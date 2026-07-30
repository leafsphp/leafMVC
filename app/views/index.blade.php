<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400..800&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #fafaf9; --fg: #0c0a09; --muted: #57534e; --soft: #78716c;
            --line: rgba(12,10,9,0.1); --card: #ffffff; --card-hover: #fafaf9;
            --btn-bg: #1c1917; --btn-fg: #fafaf9; --btn-hover: #292524;
            --btn2-bg: #ffffff; --btn2-hover: #fafaf9;
            --term-bg: #171412; --term-line: rgba(255,255,255,0.08);
        }
        @media (prefers-color-scheme: dark) {
            :root {
                --bg: #0c0a09; --fg: #fafaf9; --muted: #a8a29e; --soft: #78716c;
                --line: rgba(250,250,249,0.1); --card: #0c0a09; --card-hover: #171412;
                --btn-bg: #fafaf9; --btn-fg: #1c1917; --btn-hover: #e7e5e4;
                --btn2-bg: #0c0a09; --btn2-hover: #171412;
            }
        }
        * { box-sizing: border-box; margin: 0; }
        body { background: var(--bg); color: var(--fg); font-family: Inter, ui-sans-serif, system-ui, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }
        a { color: inherit; text-decoration: none; }
        code, .mono { font-family: "JetBrains Mono", ui-monospace, monospace; }
        h1, h2, h3 { font-family: "Bricolage Grotesque", Inter, sans-serif; }
        .rails { max-width: 1120px; margin: 0 auto; min-height: 100vh; display: flex; flex-direction: column; border-left: 1px solid var(--line); border-right: 1px solid var(--line); padding: 0 32px; }
        .eyebrow { font-family: "JetBrains Mono", monospace; font-size: 11px; font-weight: 500; letter-spacing: 0.16em; text-transform: uppercase; color: var(--soft); }
        .eyebrow::before { content: '// '; opacity: 0.5; letter-spacing: 0; }
        header { display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 16px; padding: 20px 0; border-bottom: 1px solid var(--line); }
        .brand { display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 600; letter-spacing: -0.01em; }
        .brand img { height: 28px; width: 28px; }
        .badge { border: 1px solid var(--line); color: var(--soft); padding: 2px 6px; font-size: 11px; font-weight: 600; font-family: "JetBrains Mono", monospace; }
        nav { display: flex; flex-wrap: wrap; gap: 4px; }
        nav a { display: flex; align-items: center; gap: 8px; padding: 8px 12px; font-size: 13px; font-weight: 500; color: var(--muted); transition: background .15s, color .15s; }
        nav a:hover { background: rgba(128,128,128,0.08); color: var(--fg); }
        main { flex: 1; display: flex; flex-direction: column; }
        .hero { display: flex; flex-direction: column; align-items: center; text-align: center; padding: 72px 0 64px; }
        h1 { font-size: 42px; font-weight: 700; letter-spacing: -0.02em; line-height: 1.08; margin-top: 16px; }
        @media (min-width: 640px) { h1 { font-size: 54px; } }
        .gradient { background: linear-gradient(135deg, #F5B731 0%, #E8753A 35%, #D4542B 65%, #C0392B 100%); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; }
        .lead { margin: 18px auto 0; max-width: 30rem; font-size: 16px; line-height: 1.65; color: var(--muted); }
        .terminal { position: relative; width: 100%; max-width: 620px; margin: 40px auto 0; border: 1px solid var(--term-line); background: var(--term-bg); color: #f5f5f4; padding: 26px 28px; font-size: 12.5px; line-height: 1.9; text-align: left; font-family: "JetBrains Mono", ui-monospace, monospace; }
        .terminal::before, .terminal::after { content: ''; position: absolute; width: 5px; height: 5px; background: #E8753A; }
        .terminal::before { top: -1px; left: -1px; }
        .terminal::after { bottom: -1px; right: -1px; }
        .terminal .prompt { color: #E8753A; font-weight: 500; }
        .terminal .out { color: #a8a29e; }
        .terminal .hi { color: #F5B731; }
        .terminal .sep { display: block; height: 1px; background: var(--term-line); margin: 16px -28px; }
        .actions { margin-top: 36px; display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; }
        .btn { display: inline-flex; align-items: center; gap: 8px; padding: 11px 18px; font-size: 14px; font-weight: 500; transition: background .15s; }
        .btn-primary { background: var(--btn-bg); color: var(--btn-fg); }
        .btn-primary:hover { background: var(--btn-hover); }
        .btn-secondary { border: 1px solid var(--line); background: var(--btn2-bg); }
        .btn-secondary:hover { background: var(--btn2-hover); }
        section.block { padding: 56px 0; border-top: 1px solid var(--line); }
        .tilebed { margin-top: 24px; display: grid; grid-template-columns: 1fr; gap: 1px; background: var(--line); border: 1px solid var(--line); }
        @media (min-width: 768px) { .tilebed { grid-template-columns: repeat(3, 1fr); } }
        .tile { background: var(--card); padding: 26px; transition: background .15s; min-width: 0; }
        .tile:hover { background: var(--card-hover); }
        .tile .file { font-family: "JetBrains Mono", monospace; font-size: 11px; color: var(--soft); margin-bottom: 10px; }
        .tile h3 { font-size: 16px; font-weight: 600; letter-spacing: -0.01em; }
        .tile p.blurb { margin-top: 6px; font-size: 13px; line-height: 1.55; color: var(--muted); }
        .tile pre { margin-top: 14px; font-size: 12.5px; line-height: 1.7; color: var(--fg); overflow-x: auto; }
        .tile pre .fn { color: #D4542B; }
        .tile pre .str { color: #7c8a4d; }
        .tile pre .cmt { color: var(--soft); }
        .install-line { margin-top: 20px; font-size: 13px; color: var(--soft); }
        .install-line code { color: var(--fg); border: 1px solid var(--line); padding: 3px 8px; }
        footer { display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 8px; padding: 18px 0; border-top: 1px solid var(--line); font-size: 13px; color: var(--soft); font-family: "JetBrains Mono", monospace; }
        svg { flex-shrink: 0; }
        .sr { position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(0 0 0 0); }
    </style>
</head>
<body>
    <div class="rails">
        <header>
            <a class="brand" href="https://leafphp.dev" aria-label="Leaf PHP">
                <img src="https://v5-x.leafphp.dev/logo-circle.png" alt="">
                <span>Leaf MVC</span>
                <span class="badge">v5</span>
            </a>
            <nav aria-label="Useful Leaf links">
                <a href="https://github.com/leafsphp/leaf" target="_blank" rel="noreferrer">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/></svg>
                    GitHub
                </a>
                <a href="https://leafphp.dev/docs/" target="_blank" rel="noreferrer">Docs</a>
                <a href="https://leafphp.dev/support" target="_blank" rel="noreferrer">🧡 SUPPORT LEAF</a>
            </nav>
        </header>

        <main>
            <section class="hero" aria-labelledby="welcome-title">
                <p class="eyebrow">leaf mvc v5</p>
                <h1 id="welcome-title">Elegant PHP for you<br><span class="gradient">and your AI agents ⚡️</span></h1>
                <p class="lead">Full MVC structure, a console that scaffolds it, and a project map your AI assistant reads so it builds in your patterns, not invented ones.</p>

                <div class="terminal" aria-label="Console preview">
                    <span class="prompt">$</span> leaf g:controller Posts -m<br>
                    <span class="out">→ app/controllers/PostsController.php</span><br>
                    <span class="out">→ app/models/Post.php</span>
                    <span class="sep" aria-hidden="true"></span>
                    <span class="prompt">$</span> leaf context<br>
                    <span class="out">→ <span class="hi">Project map ready</span> for your AI (routes, structure, conventions)</span>
                </div>

                <div class="actions">
                    <a class="btn btn-primary" href="https://leafphp.dev/docs/intro/first-app" target="_blank" rel="noreferrer">
                        Quick Start
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m0 0-6-6m6 6-6 6"/></svg>
                    </a>
                    <a class="btn btn-secondary" href="https://leafphp.dev/docs/mvc/" target="_blank" rel="noreferrer">Documentation</a>
                </div>
            </section>

            <section class="block" aria-labelledby="essentials">
                <h2 id="essentials" class="sr">The essentials, one function away</h2>
                <p class="eyebrow">Ship features, not boilerplate</p>
                <div class="tilebed">
                    <article class="tile">
                        <p class="file">app/routes/_auth.php</p>
                        <h3>Auth in one line</h3>
                        <p class="blurb">Login, signup, sessions and tokens, from one function.</p>
                        <pre class="mono">$email = <span class="fn">request</span>()->get(<span class="str">'email'</span>);
$password = <span class="fn">request</span>()->get(<span class="str">'password'</span>);

<span class="fn">auth</span>()->login([
  <span class="str">'email'</span> => $email,
  <span class="str">'password'</span> => $password,
]);</pre>
                    </article>
                    <article class="tile">
                        <p class="file">app/database/users.yml</p>
                        <h3>Your database is a YAML file</h3>
                        <p class="blurb">Edit it, run <code class="mono">leaf db:migrate</code>, and Leaf diffs the changes in. Seeds included.</p>
                        <pre class="mono"><span class="fn">columns</span>:
  <span class="fn">email</span>: { <span class="fn">type</span>: <span class="str">string</span>, <span class="fn">unique</span>: <span class="str">true</span> }
  <span class="fn">plan</span>: <span class="str">string</span>
<span class="fn">seeds</span>:
  <span class="fn">count</span>: <span class="str">10</span>
  <span class="fn">data</span>:
    <span class="fn">email</span>: <span class="str">'@faker.unique.safeEmail'</span></pre>
                    </article>
                    <article class="tile">
                        <p class="file">app/controllers/SignupController.php</p>
                        <h3>Heavy work leaves the request</h3>
                        <p class="blurb">Queue the slow part, respond instantly. A worker picks it up in the background.</p>
                        <pre class="mono"><span class="fn">dispatch</span>(
  SendWelcomeEmail::<span class="fn">with</span>($user->id)
);

<span class="fn">response</span>()->json([
  <span class="str">'status'</span> => <span class="str">'shipped'</span>,
]);</pre>
                    </article>
                </div>
                <p class="install-line">Need more? <code class="mono">leaf install auth db mail billing queue</code> and each module wires itself up.</p>
            </section>
        </main>

        <footer>
            <span>php v{{ PHP_VERSION }}</span>
            <span>simple · elegant · fast · leaf 5</span>
        </footer>
    </div>
</body>
</html>
