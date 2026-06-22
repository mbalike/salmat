@extends('layouts.app')

@section('title', 'The Blue Diplomats Initiative • Salmart Diplomatic Hospitality')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-detail.css') }}" />
<link rel="stylesheet" href="{{ asset('css/blue-diplomats.css') }}" />
@endpush

@section('content')
<section class="inner-hero bd-hero" aria-label="Page header">
	<div class="inner-hero-inner">
		<nav class="breadcrumbs" aria-label="Breadcrumb">
			<a href="/">Home</a>
			<span class="crumb-sep" aria-hidden="true">›</span>
			<a href="/portfolio">Our Initiatives</a>
			<span class="crumb-sep" aria-hidden="true">›</span>
			<span aria-current="page">The Blue Diplomats Initiative</span>
		</nav>

		<h1 class="inner-hero-title">The Blue Diplomats Initiative</h1>
	</div>
</section>

<main id="main" class="bd-main">

	<!-- Overview (Layout A split) -->
	<section class="bd-section" aria-label="Overview">
		<div class="bd-container bd-split">
			<div class="bd-panel">
				<div class="bd-kicker">Overview</div>
				<h2>The Blue Diplomats Initiative</h2>
				<p>The Blue Diplomats Initiative is a flagship platform advancing sustainable ocean futures through science-informed diplomacy, youth leadership, and multi-stakeholder collaboration.</p>
				<p>The Initiative recognizes that oceans connect nations, economies, and communities and that effective ocean governance requires bridging the gap between scientific knowledge, policy decision-making, and practical action.</p>
				<p>By empowering a new generation of leaders to translate evidence into influence and innovation into impact, the Initiative contributes to resilient ecosystems, inclusive economic growth, and sustainable development.</p>

				<ul class="bd-checklist" aria-label="Alignment highlights">
					<li>
						<span class="tick" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none"><path d="M20 6 9 17l-5-5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</span>
						UN Decade of Ocean Science for Sustainable Development (2021–2030) – advancing “The Ocean We Want”
					</li>
					<li>
						<span class="tick" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none"><path d="M20 6 9 17l-5-5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</span>
						Sustainable Development Goals, particularly SDG 14: Life Below Water
					</li>
					<li>
						<span class="tick" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none"><path d="M20 6 9 17l-5-5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</span>
						Tanzania Vision 2050 – supporting a knowledge-based, climate-resilient, and inclusive blue economy
					</li>
				</ul>
			</div>

			<div class="bd-visual" aria-label="Ocean and diplomacy">
				<img src="{{ asset('img/events/beach-cleaning (3).jpg') }}" alt="Leaders collaborating in a professional setting" loading="lazy" decoding="async" />
			</div>
		</div>
	</section>

	<!-- Who are the Blue Diplomats (adapted: list-driven, no forced 'Read more') -->
	<section class="bd-section" aria-label="Who are the Blue Diplomats">
		<div class="bd-container">
			<div class="bd-head">
				<div>
					<div class="bd-kicker">Community</div>
					<h2>Who Are the Blue Diplomats?</h2>
				</div>
				<div>
					<p>The Blue Diplomats are a multidisciplinary, global community committed to advancing sustainable ocean futures through science, policy, innovation, and collaboration.</p>
				</div>
				<div aria-hidden="true"></div>
			</div>

			<div class="bd-grid bd-community" role="list" aria-label="The Blue Diplomats bring together">
				<div class="bd-card" role="listitem">
					<div class="bd-card-row">
						<i class="bi bi-person-badge-fill bd-community-ico" aria-hidden="true"></i>
						<div>
							<h3>Youth leaders and emerging professionals</h3>
							<p>Youth are not observers — they are Blue Diplomats.</p>
						</div>
					</div>
				</div>

				<div class="bd-card" role="listitem">
					<div class="bd-card-row">
						<i class="bi bi-mortarboard-fill bd-community-ico" aria-hidden="true"></i>
						<div>
							<h3>Marine scientists and climate researchers</h3>
							<p>Oceanographers, marine scientists, and climate researchers.</p>
						</div>
					</div>
				</div>

				<div class="bd-card" role="listitem">
					<div class="bd-card-row">
						<i class="bi bi-bank2 bd-community-ico" aria-hidden="true"></i>
						<div>
							<h3>Diplomats and policymakers</h3>
							<p>Negotiators and government decision-makers.</p>
						</div>
					</div>
				</div>

				<div class="bd-card" role="listitem">
					<div class="bd-card-row">
						<i class="bi bi-life-preserver bd-community-ico" aria-hidden="true"></i>
						<div>
							<h3>Maritime professionals</h3>
							<p>Seafarers, port authorities, shipping, and logistics experts.</p>
						</div>
					</div>
				</div>

				<div class="bd-card" role="listitem">
					<div class="bd-card-row">
						<i class="bi bi-lightbulb-fill bd-community-ico" aria-hidden="true"></i>
						<div>
							<h3>Innovation and technology ecosystems</h3>
							<p>Entrepreneurs, investors, and technology/data experts supporting ocean solutions.</p>
						</div>
					</div>
				</div>

				<div class="bd-card" role="listitem">
					<div class="bd-card-row">
						<i class="bi bi-globe2 bd-community-ico" aria-hidden="true"></i>
						<div>
							<h3>Communities and cooperation partners</h3>
							<p>Coastal stakeholders, indigenous knowledge holders, development practitioners, and international partners.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="bd-highlight" style="margin-top:22px" aria-label="Core connector statement">
				<h3>Connecting science to diplomacy, policy to practice</h3>
				<p>Together, the Blue Diplomats connect science to diplomacy, policy to practice, and local action to global impact.</p>
			</div>
		</div>
	</section>

	<!-- Our approach (full-bleed split) -->
	<section class="bd-approach-split" aria-label="Our approach">
		<div class="bd-approach-img" aria-hidden="true">
			<img src="{{ asset('img/events/beach-cleaning (6).jpg') }}" alt="Ocean researchers collaborating" loading="lazy" decoding="async" />
		</div>
		<div class="bd-approach-panel">
			<div class="bd-approach-inner">
				<div class="bd-kicker">Our Approach</div>
				<h2>Science → Policy → Action</h2>
				<p class="bd-lead">The Blue Diplomats Initiative operates through a Science → Policy → Action framework that translates research into policy-relevant knowledge, strengthens youth capacity, and bridges science, governance, and communities.</p>

				<div class="bd-approach-cards" role="list" aria-label="Framework pillars">
					<article class="bd-approach-card" role="listitem">
						<div class="bd-approach-card-ico" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none"><path d="M9 3h6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M10 3v7l-4 9h12l-4-9V3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9.5" cy="14.5" r=".9" fill="currentColor"/><circle cx="13" cy="16.5" r=".7" fill="currentColor"/></svg>
						</div>
						<div>
							<h3>Science</h3>
							<p>Generate and curate ocean knowledge that matters for decisions.</p>
						</div>
					</article>

					<article class="bd-approach-card" role="listitem">
						<div class="bd-approach-card-ico" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none"><path d="M14 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9l-6-6Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M14 3v6h6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8 13h8M8 17h5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
						</div>
						<div>
							<h3>Policy</h3>
							<p>Translate evidence into negotiation-ready, policy-relevant insights.</p>
						</div>
					</article>

					<article class="bd-approach-card" role="listitem">
						<div class="bd-approach-card-ico" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none"><path d="M13 2 4.5 13.5H12L11 22l8.5-11.5H12L13 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<div>
							<h3>Action</h3>
							<p>Support implementation, partnerships, and innovation pathways.</p>
						</div>
					</article>

					<article class="bd-approach-card" role="listitem">
						<div class="bd-approach-card-ico" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none"><path d="M1 4v6h6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M23 20v-6h-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M3.51 15a9 9 0 0 0 14.85 3.36L23 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<div>
							<h3>Continuous Learning</h3>
							<p>Governance challenges feed back into future research and innovation.</p>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

	<!-- Global South leadership — testimonial layout -->
	<section class="bd-gs-section" aria-label="Global South leadership">
		<div class="bd-gs-inner">
			<div class="bd-gs-left">
				<div class="bd-kicker">Global South</div>
				<h2>Global South Leadership</h2>
				<div class="bd-gs-divider"></div>
				<p>The Initiative prioritizes leadership from Tanzania and the wider Global South, recognizing disproportionate vulnerabilities, untapped youth and innovation potential, and the need for equitable representation in global ocean governance.</p>
			</div>
			<div class="bd-gs-widget">
				<div class="bd-gs-card">
					<p class="bd-gs-quote">&ldquo;By elevating local knowledge and regional expertise, the Blue Diplomats contribute to a more balanced and inclusive global ocean agenda — one where Global South voices shape the future of our oceans.&rdquo;</p>
					<div class="bd-gs-author">
						<strong>Inclusive Global Agenda</strong>
						<span>Blue Diplomats Initiative, Tanzania</span>
					</div>
					<div class="bd-gs-qmark" aria-hidden="true">&#x201D;</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Strategic focus areas -->
	<section class="bd-sf-section" aria-label="Strategic focus areas">

		<div class="bd-sf-band">
			<div class="bd-sf-band-inner">
				<div class="bd-kicker">Strategic Focus</div>
				<h2>Strategic Focus Areas</h2>
				<p class="bd-lead">The Initiative advances an integrated agenda connecting environmental sustainability with economic transformation, social inclusion, and long-term resilience.</p>
			</div>
		</div>

		<div class="bd-sf-featured">
			<article class="bd-sf-card">
				<h3>Ocean Governance &amp; Marine Protection</h3>
				<div class="bd-sf-divider"></div>
				<ul class="bd-sf-list">
					<li>Science-based policies and regulatory frameworks</li>
					<li>Marine Protected Areas and ecosystem restoration</li>
					<li>Regional and international cooperation</li>
					<li>Youth participation in decision-making</li>
				</ul>
			</article>

			<article class="bd-sf-card">
				<h3>Climate Change &amp; Climate Justice</h3>
				<div class="bd-sf-divider"></div>
				<ul class="bd-sf-list">
					<li>Ocean&#x2013;climate resilience and adaptation</li>
					<li>Nature-based solutions for coastal protection</li>
					<li>Addressing loss, damage, and vulnerability</li>
					<li>Equity and inclusion in climate responses</li>
				</ul>
			</article>

			<article class="bd-sf-card">
				<h3>Sustainable Fisheries &amp; Coastal Livelihoods</h3>
				<div class="bd-sf-divider"></div>
				<ul class="bd-sf-list">
					<li>Responsible fisheries management</li>
					<li>Community-based resource governance</li>
					<li>Value chain development and market access</li>
					<li>Protecting small-scale fishers' livelihoods</li>
				</ul>
			</article>
		</div>

		<div class="bd-sf-rest">
			<article class="bd-sf-card">
				<h3>Blue Economy, Innovation &amp; Commercialization</h3>
				<div class="bd-sf-divider"></div>
				<ul class="bd-sf-list">
					<li>Youth entrepreneurship and startups</li>
					<li>Investment and public&#x2013;private partnerships</li>
					<li>Marine technology, aquaculture, tourism, renewable energy</li>
					<li>Commercialization of research and local solutions</li>
				</ul>
			</article>

			<article class="bd-sf-card">
				<h3>Employment &amp; Decent Work in the Blue Economy</h3>
				<div class="bd-sf-divider"></div>
				<ul class="bd-sf-list">
					<li>Green and blue jobs across ocean sectors</li>
					<li>Skills development and career pathways</li>
					<li>Youth entrepreneurship and self-employment</li>
					<li>Decent work aligned with sustainability</li>
				</ul>
			</article>

			<article class="bd-sf-card">
				<h3>Marine Spatial Planning (MSP)</h3>
				<div class="bd-sf-divider"></div>
				<ul class="bd-sf-list">
					<li>Integrated planning of ocean space</li>
					<li>Balancing conservation and economic use</li>
					<li>Stakeholder engagement and conflict management</li>
					<li>Youth involvement in spatial governance</li>
				</ul>
			</article>

			<article class="bd-sf-card">
				<h3>CITES &amp; Marine Biodiversity Trade Governance</h3>
				<div class="bd-sf-divider"></div>
				<ul class="bd-sf-list">
					<li>Sustainable trade in marine species</li>
					<li>Awareness of international compliance mechanisms</li>
					<li>Combating illegal exploitation and wildlife trade</li>
					<li>Linking conservation with livelihoods</li>
				</ul>
			</article>

			<article class="bd-sf-card">
				<h3>Science Communication &amp; Ocean Literacy</h3>
				<div class="bd-sf-divider"></div>
				<ul class="bd-sf-list">
					<li>Translating complex science for policy and public use</li>
					<li>Media engagement and storytelling</li>
					<li>Policy briefs and knowledge translation</li>
					<li>Public awareness and education</li>
				</ul>
			</article>

			<article class="bd-sf-card">
				<h3>Youth &amp; Gender Mainstreaming</h3>
				<div class="bd-sf-divider"></div>
				<ul class="bd-sf-list">
					<li>Inclusive leadership opportunities</li>
					<li>Gender-responsive programming</li>
					<li>Equitable access to training, finance, and careers</li>
				</ul>
			</article>

			<article class="bd-sf-card">
				<h3>Maritime Sector &amp; Coastal Development</h3>
				<div class="bd-sf-divider"></div>
				<ul class="bd-sf-list">
					<li>Engagement with seafarers, ports, and shipping industries</li>
					<li>Sustainable port operations and green shipping</li>
					<li>Climate-resilient coastal infrastructure</li>
					<li>Maritime career pathways and workforce development</li>
				</ul>
			</article>
		</div>

	</section>

	<!-- Impact + Alignment -->
	<section class="bd-section" aria-label="Impact and alignment">
		<div class="bd-container bd-two">
			<div>
				<div class="bd-kicker">Our Impact</div>
				<h2 class="bd-h2">What We Aim to Achieve</h2>
				<ul class="bd-list" aria-label="Impact list">
					<li><span class="tick" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" width="22" height="22"><path d="M20 6 9 17l-5-5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Strengthen youth leadership in ocean governance</li>
					<li><span class="tick" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" width="22" height="22"><path d="M20 6 9 17l-5-5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Advance science-informed policy and diplomacy</li>
					<li><span class="tick" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" width="22" height="22"><path d="M20 6 9 17l-5-5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Support innovation and commercialization of ocean solutions</li>
					<li><span class="tick" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" width="22" height="22"><path d="M20 6 9 17l-5-5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Create employment and economic opportunities</li>
					<li><span class="tick" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" width="22" height="22"><path d="M20 6 9 17l-5-5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Elevate Global South perspectives</li>
					<li><span class="tick" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" width="22" height="22"><path d="M20 6 9 17l-5-5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Build a long-term network of Blue Diplomats</li>
				</ul>
			</div>

			<div>
				<div class="bd-kicker">Frameworks</div>
				<h2 class="bd-h2">Alignment</h2>
				<p class="bd-lead">The Blue Diplomats Initiative contributes to national, regional, and global ocean processes through the following frameworks:</p>
				<div class="bd-chips" aria-label="Alignment chips">
					<span class="bd-chip">UN Decade of Ocean Science (2021–2030)</span>
					<span class="bd-chip">Sustainable Development Goals (SDG 14 and related goals)</span>
					<span class="bd-chip">Climate Action and Climate Justice frameworks</span>
					<span class="bd-chip">Regional blue economy strategies</span>
					<span class="bd-chip">Tanzania Vision 2050</span>
				</div>
			</div>
		</div>
	</section>

	<!-- Join the movement (CTA) -->
	<!-- <section class="bd-section bd-cta" aria-label="Join the movement">
		<div class="bd-container bd-cta-inner">
			<h2>Join the Blue Diplomats</h2>
			<p>The future of the ocean depends on informed leadership, strong partnerships, and inclusive action. Be part of a global community turning science into diplomacy and shaping a sustainable blue future for Tanzania, the Global South, and the world.</p>
			<div class="bd-cta-actions">
				<a class="bd-btn" href="/contact">Say Hello</a>
				<a class="bd-btn bd-btn--ghost" href="mailto:relations@salmartdiplomatic.com">Email Us</a>
			</div>
		</div>
	</section> -->
@endsection
