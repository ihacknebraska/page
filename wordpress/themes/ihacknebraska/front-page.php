<?php
/**
 * Front page template for iHack Nebraska.
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="iHack Nebraska home">
        <span class="brand-mark">iHN</span>
        <span>iHack Nebraska</span>
    </a>
    <nav class="site-nav" aria-label="Primary navigation">
        <a href="#tracks">Tracks</a>
        <a href="#schedule">Schedule</a>
        <a href="#sponsors">Sponsors</a>
        <a class="button" href="mailto:hello@ihacknebraska.com">Get involved</a>
    </nav>
</header>

<main>
    <section class="hero" aria-labelledby="hero-title">
        <div class="hero-copy">
            <p class="kicker">Nebraska builders, designers, and curious minds</p>
            <h1 id="hero-title">iHack Nebraska</h1>
            <p class="lede">
                A practical hackathon for students, founders, civic technologists, and neighbors
                building useful things for Nebraska communities.
            </p>
            <div class="hero-actions">
                <a class="button" href="mailto:hello@ihacknebraska.com?subject=iHack%20Nebraska%20registration">Register interest</a>
                <a class="button secondary" href="#schedule">See the format</a>
            </div>
        </div>
        <div class="hero-art" role="img" aria-label="Abstract Nebraska map grid">
            <div class="hero-card">
                <strong>Build in public. Learn by making. Ship something that helps.</strong>
                <span>Lincoln, Omaha, and remote-friendly participation.</span>
            </div>
        </div>
    </section>

    <section class="section" id="tracks">
        <div class="section-header">
            <h2>Project Tracks</h2>
            <p>Teams can choose a prompt or bring their own idea. The best projects are simple enough to finish and useful enough to keep improving.</p>
        </div>
        <div class="tracks">
            <article class="track">
                <h3>Civic Tools</h3>
                <p>Data, accessibility, services, and local information that make public life easier to navigate.</p>
            </article>
            <article class="track">
                <h3>Ag and Environment</h3>
                <p>Prototypes for producers, land stewards, water quality, weather resilience, and rural operations.</p>
            </article>
            <article class="track">
                <h3>Campus and Community</h3>
                <p>Student life, mutual aid, events, volunteer coordination, small business, and creative culture.</p>
            </article>
        </div>
    </section>

    <section class="section" id="schedule">
        <div class="section-header">
            <h2>Weekend Format</h2>
            <p>A focused build sprint with enough structure to keep teams moving and enough room for experiments.</p>
        </div>
        <div class="schedule">
            <article class="time-block">
                <h3>Friday</h3>
                <p>Kickoff, team formation, idea pitches, workspace setup, and early mentor rounds.</p>
            </article>
            <article class="time-block">
                <h3>Saturday</h3>
                <p>Build sessions, workshops, office hours, prototype reviews, and community dinner.</p>
            </article>
            <article class="time-block">
                <h3>Sunday</h3>
                <p>Final polish, demos, judging, awards, and next-step support for promising projects.</p>
            </article>
        </div>
    </section>

    <section class="section" id="sponsors">
        <div class="section-header">
            <h2>Sponsor The Build</h2>
            <p>Help provide food, prizes, mentor time, cloud credits, venue support, and travel help for participants across the state.</p>
        </div>
        <div class="sponsors">
            <article class="sponsor">
                <h3>Community Partner</h3>
                <p>Support a project prompt, mentor a team, or connect builders with real users.</p>
            </article>
            <article class="sponsor">
                <h3>Startup Partner</h3>
                <p>Share technical guidance, API credits, product feedback, or founder office hours.</p>
            </article>
            <article class="sponsor">
                <h3>Venue Partner</h3>
                <p>Host builders, provide equipment, or sponsor a local watch party.</p>
            </article>
        </div>
    </section>

    <section class="cta-band">
        <div>
            <h2>Bring your team, or find one here.</h2>
            <p>Registration, dates, venue, and challenge prompts can be managed from WordPress as the event details firm up.</p>
        </div>
        <a class="button" href="mailto:hello@ihacknebraska.com">Contact iHack Nebraska</a>
    </section>
</main>

<footer class="site-footer">
    <span>&copy; <?php echo esc_html(gmdate('Y')); ?> iHack Nebraska</span>
    <span>Built on WordPress, Nginx, Traefik, and Docker.</span>
</footer>

<?php wp_footer(); ?>
</body>
</html>
