<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JunkDrop – Residential & Commercial Junk Removal Ontario</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&display=swap" rel="stylesheet">
    <style>
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --orange: #FF6200;
            --orange-light: #FF7A20;
            --orange-pale: #FFF4EE;
            --black: #0D0D0D;
            --dark: #1A1A1A;
            --mid: #6B6B6B;
            --border: #E8E8E8;
            --white: #FFFFFF;
            --off: #F7F5F2;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--white);
            color: var(--black);
            overflow-x: hidden;
        }

        img {
            display: block;
        }

        /* ── NAV ── */
        .nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 200;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 60px;
            height: 72px;
            background: rgba(255, 255, 255, .96);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--border);
            transition: box-shadow .3s;
        }

        .nav.scrolled {
            box-shadow: 0 4px 24px rgba(0, 0, 0, .08);
        }

        .nav-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: var(--black);
        }

        .nav-logo-mark {
            width: 38px;
            height: 38px;
            background: var(--orange);
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            color: #fff;
        }

        .nav-logo-text {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.65rem;
            letter-spacing: 2px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 32px;
            list-style: none;
        }

        .nav-links a {
            color: var(--mid);
            font-size: .88rem;
            font-weight: 500;
            text-decoration: none;
            transition: color .2s;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--orange);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform .2s;
        }

        .nav-links a:hover {
            color: var(--black);
        }

        .nav-links a:hover::after {
            transform: scaleX(1);
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .nav-phone {
            font-size: .88rem;
            font-weight: 600;
            color: var(--black);
            text-decoration: none;
        }

        .nav-cta {
            background: var(--orange);
            color: #fff;
            padding: 11px 22px;
            border-radius: 8px;
            font-weight: 700;
            font-size: .88rem;
            text-decoration: none;
            transition: background .2s, transform .15s, box-shadow .2s;
            box-shadow: 0 4px 14px rgba(255, 98, 0, .3);
        }

        .nav-cta:hover {
            background: var(--orange-light);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 98, 0, .4);
        }

        /* ── HERO ── */
        .hero {
            min-height: 100vh;
            padding-top: 72px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            position: relative;
            overflow: hidden;
        }

        .hero-left {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 80px 60px 80px 80px;
        }

        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 1.5px solid var(--border);
            border-radius: 100px;
            padding: 6px 16px;
            width: fit-content;
            font-size: .75rem;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: var(--mid);
            margin-bottom: 32px;
            opacity: 0;
            animation: fadeUp .6s .15s forwards;
        }

        .blink-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--orange);
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 1
            }

            50% {
                transform: scale(1.4);
                opacity: .6
            }
        }

        .hero-h1 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(4.5rem, 7vw, 7.5rem);
            line-height: .92;
            letter-spacing: 1px;
            margin-bottom: 28px;
            opacity: 0;
            animation: fadeUp .7s .3s forwards;
        }

        .h1-orange {
            color: var(--orange);
            display: block;
        }

        .h1-black {
            color: var(--black);
            display: block;
        }

        .h1-outline {
            display: block;
            -webkit-text-stroke: 2px var(--black);
            color: transparent;
        }

        .hero-desc {
            font-size: 1.05rem;
            line-height: 1.7;
            color: var(--mid);
            max-width: 420px;
            margin-bottom: 40px;
            opacity: 0;
            animation: fadeUp .7s .45s forwards;
        }

        .hero-desc b {
            color: var(--black);
            font-weight: 600;
        }

        .hero-actions {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 56px;
            opacity: 0;
            animation: fadeUp .7s .6s forwards;
        }

        .btn-main {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: var(--orange);
            color: #fff;
            padding: 16px 30px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 1rem;
            text-decoration: none;
            box-shadow: 0 6px 20px rgba(255, 98, 0, .3);
            transition: all .2s;
        }

        .btn-main:hover {
            background: var(--orange-light);
            transform: translateY(-3px);
            box-shadow: 0 12px 28px rgba(255, 98, 0, .4);
        }

        .btn-ghost {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--black);
            padding: 15px 26px;
            border-radius: 10px;
            border: 1.5px solid var(--border);
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
            transition: all .2s;
        }

        .btn-ghost:hover {
            border-color: var(--black);
            background: var(--off);
            transform: translateY(-3px);
        }

        .hero-stats {
            display: flex;
            border: 1.5px solid var(--border);
            border-radius: 14px;
            overflow: hidden;
            width: fit-content;
            opacity: 0;
            animation: fadeUp .7s .75s forwards;
        }

        .hstat {
            padding: 18px 28px;
            text-align: center;
            border-right: 1.5px solid var(--border);
        }

        .hstat:last-child {
            border-right: none;
        }

        .hstat-num {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2rem;
            letter-spacing: 1px;
            color: var(--black);
            line-height: 1;
        }

        .hstat-num em {
            color: var(--orange);
            font-style: normal;
        }

        .hstat-label {
            font-size: .72rem;
            color: var(--mid);
            font-weight: 500;
            letter-spacing: .5px;
            margin-top: 3px;
        }

        .hero-right {
            position: relative;
            overflow: hidden;
            opacity: 0;
            animation: fadeIn .9s .4s forwards;
        }

        .hero-right-bg {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, var(--orange-pale) 0%, #FFE5D0 100%);
        }

        .hero-right::before {
            content: '';
            position: absolute;
            top: -10%;
            left: -15%;
            width: 55%;
            height: 130%;
            background: var(--white);
            transform: skewX(-6deg);
            z-index: 1;
        }

        .img-main {
            position: absolute;
            top: 10%;
            right: 5%;
            width: 62%;
            height: 55%;
            border-radius: 18px;
            overflow: hidden;
            z-index: 2;
            box-shadow: 0 24px 64px rgba(0, 0, 0, .18);
        }

        .img-main img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            animation: slowZoom 14s ease-in-out infinite alternate;
        }

        .img-sec {
            position: absolute;
            bottom: 8%;
            left: 18%;
            width: 46%;
            height: 40%;
            border-radius: 18px;
            overflow: hidden;
            z-index: 3;
            box-shadow: 0 20px 50px rgba(0, 0, 0, .2);
            border: 4px solid #fff;
            animation: floatA 5s ease-in-out infinite alternate;
        }

        .img-sec img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .img-third {
            position: absolute;
            top: 8%;
            left: 12%;
            width: 34%;
            height: 28%;
            border-radius: 14px;
            overflow: hidden;
            z-index: 2;
            box-shadow: 0 12px 36px rgba(0, 0, 0, .15);
            border: 3px solid #fff;
            animation: floatB 6s ease-in-out infinite alternate;
        }

        .img-third img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @keyframes slowZoom {
            from {
                transform: scale(1.04)
            }

            to {
                transform: scale(1.12)
            }
        }

        @keyframes floatA {
            from {
                transform: translateY(0) rotate(-1deg)
            }

            to {
                transform: translateY(-14px) rotate(0)
            }
        }

        @keyframes floatB {
            from {
                transform: translateY(0) rotate(1.5deg)
            }

            to {
                transform: translateY(-10px) rotate(.5deg)
            }
        }

        .hero-pill {
            position: absolute;
            bottom: 28%;
            right: 4%;
            z-index: 4;
            background: #fff;
            border-radius: 14px;
            padding: 14px 18px;
            display: flex;
            align-items: center;
            gap: 12px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, .14);
            animation: floatA 7s 1s ease-in-out infinite alternate;
        }

        .hero-pill-icon {
            width: 42px;
            height: 42px;
            background: var(--orange-pale);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            border: 1px solid rgba(255, 98, 0, .2);
        }

        .hero-pill-text strong {
            display: block;
            font-weight: 700;
            font-size: .92rem;
            color: var(--black);
        }

        .hero-pill-text span {
            font-size: .72rem;
            color: var(--mid);
        }

        .hero-badge {
            position: absolute;
            top: 46%;
            left: 4%;
            z-index: 4;
            background: var(--orange);
            color: #fff;
            border-radius: 12px;
            padding: 12px 16px;
            animation: floatB 4.5s ease-in-out infinite alternate;
            box-shadow: 0 6px 20px rgba(255, 98, 0, .35);
        }

        .hero-badge .stars {
            font-size: .85rem;
            letter-spacing: 2px;
            margin-bottom: 3px;
        }

        .hero-badge .rating {
            font-weight: 700;
            font-size: .88rem;
        }

        .hero-badge .sub {
            font-size: .68rem;
            opacity: .85;
        }

        /* ── MARQUEE ── */
        .marquee {
            background: var(--black);
            overflow: hidden;
            padding: 18px 0;
            border-top: 3px solid var(--orange);
        }

        .marquee-track {
            display: flex;
            animation: scroll 30s linear infinite;
            white-space: nowrap;
        }

        .marquee-item {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 0 36px;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.1rem;
            letter-spacing: 2px;
            color: rgba(255, 255, 255, .5);
            border-right: 1px solid rgba(255, 255, 255, .1);
        }

        .marquee-item .dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--orange);
            flex-shrink: 0;
        }

        @keyframes scroll {
            from {
                transform: translateX(0)
            }

            to {
                transform: translateX(-50%)
            }
        }

        /* ── SECTION HELPERS ── */
        .section-label {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: .73rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--orange);
            margin-bottom: 16px;
        }

        .section-label::before {
            content: '';
            width: 28px;
            height: 2px;
            background: var(--orange);
            border-radius: 2px;
        }

        .section-h2 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(2.8rem, 4vw, 4rem);
            line-height: .95;
            letter-spacing: 1px;
            margin-bottom: 24px;
        }

        .section-h2 span {
            color: var(--orange);
        }

        .section-body {
            font-size: 1rem;
            line-height: 1.75;
            color: var(--mid);
            margin-bottom: 32px;
        }

        .section-header {
            text-align: center;
            margin-bottom: 64px;
        }

        .section-header .section-label {
            justify-content: center;
        }

        .section-header .section-label::before {
            display: none;
        }

        .section-header .section-label::after {
            content: '';
            width: 28px;
            height: 2px;
            background: var(--orange);
            border-radius: 2px;
        }

        /* ── ABOUT ── */
        .about {
            padding: 100px 80px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .about-img-wrap {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            height: 480px;
        }

        .about-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .about-img-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, .35), transparent 50%);
        }

        .about-badge {
            position: absolute;
            bottom: 24px;
            left: 24px;
            background: #fff;
            border-radius: 14px;
            padding: 18px 22px;
            box-shadow: 0 8px 28px rgba(0, 0, 0, .15);
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .about-badge-icon {
            width: 48px;
            height: 48px;
            background: var(--orange-pale);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .about-badge-txt strong {
            display: block;
            font-size: 1.5rem;
            font-weight: 700;
            font-family: 'Bebas Neue', sans-serif;
            letter-spacing: 1px;
        }

        .about-badge-txt span {
            font-size: .78rem;
            color: var(--mid);
        }

        .about-yrs {
            position: absolute;
            top: 24px;
            right: -20px;
            background: var(--orange);
            color: #fff;
            border-radius: 14px;
            padding: 16px 20px;
            text-align: center;
            box-shadow: 0 6px 20px rgba(255, 98, 0, .4);
        }

        .about-yrs strong {
            display: block;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2.2rem;
            line-height: 1;
        }

        .about-yrs span {
            font-size: .72rem;
            letter-spacing: .5px;
            opacity: .9;
        }

        .check-list {
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin-bottom: 36px;
        }

        .check-row {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: .93rem;
            color: var(--dark);
        }

        .check-icon {
            width: 24px;
            height: 24px;
            background: var(--orange);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: .75rem;
            flex-shrink: 0;
            margin-top: 1px;
        }

        /* ── SERVICES ── */
        .services {
            background: var(--off);
            padding: 100px 80px;
        }

        .srv-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .srv-card {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            border: 1.5px solid var(--border);
            transition: transform .3s, box-shadow .3s, border-color .3s;
            cursor: pointer;
        }

        .srv-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, .1);
            border-color: var(--orange);
        }

        .srv-img {
            width: 100%;
            height: 180px;
            overflow: hidden;
            position: relative;
        }

        .srv-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .4s;
        }

        .srv-card:hover .srv-img img {
            transform: scale(1.07);
        }

        .srv-ov {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, .5), transparent 60%);
            opacity: 0;
            transition: opacity .3s;
        }

        .srv-card:hover .srv-ov {
            opacity: 1;
        }

        .srv-num {
            position: absolute;
            top: 12px;
            left: 12px;
            background: var(--orange);
            color: #fff;
            font-family: 'Bebas Neue', sans-serif;
            font-size: .85rem;
            padding: 4px 10px;
            border-radius: 6px;
        }

        .srv-body {
            padding: 20px;
        }

        .srv-title {
            font-weight: 700;
            font-size: 1rem;
            color: var(--black);
            margin-bottom: 8px;
        }

        .srv-desc {
            font-size: .83rem;
            color: var(--mid);
            line-height: 1.6;
            margin-bottom: 16px;
        }

        .srv-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: .82rem;
            font-weight: 700;
            color: var(--orange);
            text-decoration: none;
            transition: gap .2s;
        }

        .srv-link:hover {
            gap: 10px;
        }

        .srv-card.wide {
            grid-column: span 2;
        }

        .srv-card.wide .srv-img {
            height: 220px;
        }

        /* ── STEPS ── */
        .steps {
            padding: 100px 80px;
            position: relative;
            overflow: hidden;
        }

        .steps-bg {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Bebas Neue', sans-serif;
            font-size: 28rem;
            line-height: 1;
            color: var(--off);
            z-index: 0;
            pointer-events: none;
            opacity: .7;
        }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            position: relative;
            z-index: 1;
        }

        .steps-grid::before {
            content: '';
            position: absolute;
            top: 52px;
            left: 12.5%;
            right: 12.5%;
            height: 2px;
            background: linear-gradient(90deg, var(--orange), var(--orange-pale));
            z-index: 0;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 0 28px;
            position: relative;
            z-index: 1;
        }

        .step-circle {
            width: 104px;
            height: 104px;
            border-radius: 50%;
            border: 2px solid var(--border);
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2.5rem;
            color: var(--black);
            margin-bottom: 28px;
            position: relative;
            transition: all .3s;
            box-shadow: 0 4px 20px rgba(0, 0, 0, .06);
        }

        .step:hover .step-circle {
            background: var(--orange);
            color: #fff;
            border-color: var(--orange);
            transform: scale(1.08);
            box-shadow: 0 8px 28px rgba(255, 98, 0, .35);
        }

        .step-ico {
            position: absolute;
            bottom: -6px;
            right: -6px;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: var(--orange);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .9rem;
            color: #fff;
            border: 2px solid #fff;
        }

        .step-title {
            font-weight: 700;
            font-size: 1.05rem;
            color: var(--black);
            margin-bottom: 10px;
        }

        .step-desc {
            font-size: .88rem;
            color: var(--mid);
            line-height: 1.65;
        }

        /* ── DIFFERENCE ── */
        .diff {
            background: var(--black);
            color: #fff;
            padding: 100px 80px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .diff::before {
            content: '';
            position: absolute;
            top: -30%;
            right: -10%;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 98, 0, .15), transparent 70%);
            pointer-events: none;
        }

        .diff-img {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            height: 520px;
        }

        .diff-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .diff-img::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(255, 98, 0, .3), transparent 60%);
        }

        .diff .section-label {
            color: var(--orange);
        }

        .diff .section-label::before {
            background: var(--orange);
        }

        .diff .section-h2 {
            color: #fff;
        }

        .diff .section-body {
            color: rgba(255, 255, 255, .6);
        }

        .diff-pts {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .diff-pt {
            display: flex;
            align-items: flex-start;
            gap: 18px;
            padding: 20px 22px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, .08);
            background: rgba(255, 255, 255, .04);
            transition: background .2s, border-color .2s, transform .2s;
        }

        .diff-pt:hover {
            background: rgba(255, 98, 0, .1);
            border-color: rgba(255, 98, 0, .3);
            transform: translateX(6px);
        }

        .diff-pt-ico {
            width: 46px;
            height: 46px;
            border-radius: 11px;
            background: rgba(255, 98, 0, .15);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
            border: 1px solid rgba(255, 98, 0, .25);
        }

        .diff-pt-body strong {
            display: block;
            color: #fff;
            font-weight: 700;
            font-size: .97rem;
            margin-bottom: 4px;
        }

        .diff-pt-body p {
            font-size: .85rem;
            color: rgba(255, 255, 255, .55);
            line-height: 1.6;
        }

        /* ── CITIES ── */
        .cities {
            padding: 100px 80px;
        }

        .cities-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 56px;
        }

        .city {
            position: relative;
            border-radius: 18px;
            overflow: hidden;
            height: 200px;
            cursor: pointer;
            transition: transform .3s;
        }

        .city:hover {
            transform: scale(1.03);
        }

        .city:first-child,
        .city:nth-child(2) {
            height: 260px;
        }

        .city img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .city-ov {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, .7), rgba(0, 0, 0, .1) 60%);
            transition: background .3s;
        }

        .city:hover .city-ov {
            background: linear-gradient(to top, rgba(255, 98, 0, .75), rgba(0, 0, 0, .2) 60%);
        }

        .city-lbl {
            position: absolute;
            bottom: 20px;
            left: 22px;
            color: #fff;
        }

        .city-lbl strong {
            display: block;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.5rem;
            letter-spacing: 2px;
            line-height: 1;
        }

        .city-lbl span {
            font-size: .78rem;
            opacity: .8;
        }

        .city-arr {
            position: absolute;
            top: 16px;
            right: 16px;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            backdrop-filter: blur(4px);
            opacity: 0;
            transform: scale(.8);
            transition: all .3s;
        }

        .city:hover .city-arr {
            opacity: 1;
            transform: scale(1);
        }

        .cities-more {
            text-align: center;
            margin-top: 36px;
        }

        .btn-outline {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 1.5px solid var(--black);
            color: var(--black);
            padding: 14px 28px;
            border-radius: 10px;
            font-weight: 700;
            font-size: .92rem;
            text-decoration: none;
            transition: all .2s;
        }

        .btn-outline:hover {
            background: var(--black);
            color: #fff;
            transform: translateY(-2px);
        }

        /* ── TESTIMONIALS ── */
        .testi {
            background: var(--off);
            padding: 100px 80px;
        }

        .testi-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 56px;
        }

        .testi-card {
            background: #fff;
            border-radius: 18px;
            padding: 32px 28px;
            border: 1.5px solid var(--border);
            transition: transform .3s, box-shadow .3s, border-color .3s;
            position: relative;
            overflow: hidden;
        }

        .testi-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, .08);
            border-color: var(--orange);
        }

        .testi-card::before {
            content: '"';
            position: absolute;
            top: -10px;
            right: 20px;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 8rem;
            color: var(--orange-pale);
            line-height: 1;
            pointer-events: none;
            z-index: 0;
        }

        .testi-stars {
            color: #F5A623;
            font-size: .9rem;
            letter-spacing: 1px;
            margin-bottom: 16px;
            position: relative;
            z-index: 1;
        }

        .testi-text {
            font-size: .93rem;
            line-height: 1.7;
            color: var(--dark);
            margin-bottom: 24px;
            position: relative;
            z-index: 1;
        }

        .testi-author {
            display: flex;
            align-items: center;
            gap: 14px;
            position: relative;
            z-index: 1;
        }

        .testi-av {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            background: var(--orange-pale);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: var(--orange);
            font-size: 1.1rem;
            flex-shrink: 0;
            border: 2px solid rgba(255, 98, 0, .2);
        }

        .testi-name {
            font-weight: 700;
            font-size: .92rem;
            color: var(--black);
        }

        .testi-loc {
            font-size: .78rem;
            color: var(--mid);
        }

        .testi-card.feat {
            background: var(--orange);
            border-color: var(--orange);
        }

        .testi-card.feat .testi-stars {
            color: rgba(255, 255, 255, .9);
        }

        .testi-card.feat .testi-text {
            color: rgba(255, 255, 255, .92);
        }

        .testi-card.feat .testi-name {
            color: #fff;
        }

        .testi-card.feat .testi-loc {
            color: rgba(255, 255, 255, .7);
        }

        .testi-card.feat .testi-av {
            background: rgba(255, 255, 255, .2);
            color: #fff;
            border-color: rgba(255, 255, 255, .3);
        }

        .testi-card.feat::before {
            color: rgba(255, 255, 255, .15);
        }

        .testi-card.feat:hover {
            box-shadow: 0 20px 50px rgba(255, 98, 0, .4);
        }

        /* ── FAQ ── */
        .faq {
            padding: 100px 80px;
            display: grid;
            grid-template-columns: 1fr 1.4fr;
            gap: 80px;
            align-items: start;
        }

        .faq-img {
            margin-top: 40px;
            border-radius: 20px;
            overflow: hidden;
            height: 320px;
        }

        .faq-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .faq-item {
            border-bottom: 1.5px solid var(--border);
        }

        .faq-q {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 22px 0;
            cursor: pointer;
            font-weight: 600;
            font-size: .97rem;
            color: var(--black);
            gap: 16px;
            user-select: none;
            transition: color .2s;
        }

        .faq-q:hover {
            color: var(--orange);
        }

        .faq-ico {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: 1.5px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            color: var(--mid);
            flex-shrink: 0;
            transition: all .3s;
        }

        .faq-item.open .faq-ico {
            background: var(--orange);
            border-color: var(--orange);
            color: #fff;
            transform: rotate(45deg);
        }

        .faq-item.open .faq-q {
            color: var(--orange);
        }

        .faq-a {
            max-height: 0;
            overflow: hidden;
            transition: max-height .4s cubic-bezier(.4, 0, .2, 1), padding .4s;
            font-size: .9rem;
            color: var(--mid);
            line-height: 1.7;
        }

        .faq-item.open .faq-a {
            max-height: 200px;
            padding-bottom: 20px;
        }

        /* ── CTA ── */
        .cta {
            margin: 0 80px 80px;
            border-radius: 28px;
            overflow: hidden;
            background: var(--orange);
            color: #fff;
            position: relative;
            padding: 80px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
        }

        .cta::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='30' cy='30' r='1.5' fill='rgba(255,255,255,0.1)'/%3E%3C/svg%3E");
        }

        .cta-big-text {
            position: absolute;
            right: -20px;
            bottom: -40px;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 14rem;
            color: rgba(255, 255, 255, .08);
            line-height: 1;
            pointer-events: none;
        }

        .cta-txt {
            position: relative;
            z-index: 1;
        }

        .cta-txt h2 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(2.5rem, 4vw, 3.8rem);
            line-height: .95;
            margin-bottom: 12px;
        }

        .cta-txt p {
            font-size: 1rem;
            opacity: .9;
            line-height: 1.6;
            max-width: 440px;
        }

        .cta-btns {
            display: flex;
            flex-direction: column;
            gap: 12px;
            flex-shrink: 0;
            position: relative;
            z-index: 1;
            align-items: flex-end;
        }

        .btn-white {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #fff;
            color: var(--orange);
            padding: 16px 28px;
            border-radius: 10px;
            font-weight: 800;
            font-size: 1rem;
            text-decoration: none;
            transition: all .2s;
            box-shadow: 0 6px 20px rgba(0, 0, 0, .15);
        }

        .btn-white:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, .2);
        }

        .btn-wghost {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, .15);
            color: #fff;
            padding: 15px 28px;
            border-radius: 10px;
            border: 1.5px solid rgba(255, 255, 255, .4);
            font-weight: 700;
            font-size: 1rem;
            text-decoration: none;
            transition: all .2s;
        }

        .btn-wghost:hover {
            background: rgba(255, 255, 255, .25);
            transform: translateY(-3px);
        }

        .cta-note {
            font-size: .78rem;
            opacity: .8;
            text-align: right;
        }

        .cta-note span {
            display: flex;
            align-items: center;
            gap: 5px;
            justify-content: flex-end;
            margin-bottom: 3px;
        }

        /* ── FOOTER ── */
        footer {
            background: var(--black);
            color: rgba(255, 255, 255, .7);
            padding: 72px 80px 40px;
        }

        .foot-top {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.4fr;
            gap: 60px;
            margin-bottom: 60px;
            border-bottom: 1px solid rgba(255, 255, 255, .1);
            padding-bottom: 60px;
        }

        .foot-brand {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2rem;
            letter-spacing: 3px;
            color: #fff;
            margin-bottom: 14px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .foot-mark {
            width: 36px;
            height: 36px;
            background: var(--orange);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .foot-desc {
            font-size: .88rem;
            line-height: 1.7;
            max-width: 280px;
            margin-bottom: 24px;
        }

        .foot-socials {
            display: flex;
            gap: 10px;
        }

        .foot-social {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, .15);
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: .9rem;
            transition: background .2s, border-color .2s;
        }

        .foot-social:hover {
            background: var(--orange);
            border-color: var(--orange);
        }

        .foot-col-title {
            font-size: .78rem;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #fff;
            margin-bottom: 20px;
        }

        .foot-links {
            display: flex;
            flex-direction: column;
            gap: 10px;
            list-style: none;
        }

        .foot-links a {
            font-size: .88rem;
            color: rgba(255, 255, 255, .55);
            text-decoration: none;
            transition: color .2s;
        }

        .foot-links a:hover {
            color: var(--orange);
        }

        .foot-contacts {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .foot-contact {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            font-size: .88rem;
        }

        .foot-bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: .8rem;
            color: rgba(255, 255, 255, .35);
            flex-wrap: wrap;
            gap: 12px;
        }

        .foot-bottom a {
            color: rgba(255, 255, 255, .35);
            text-decoration: none;
            transition: color .2s;
        }

        .foot-bottom a:hover {
            color: var(--orange);
        }

        .foot-bottom-links {
            display: flex;
            gap: 20px;
        }

        /* ── REVEAL ── */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity .7s, transform .7s;
        }

        .reveal.on {
            opacity: 1;
            transform: none;
        }

        .reveal-l {
            opacity: 0;
            transform: translateX(-40px);
            transition: opacity .7s, transform .7s;
        }

        .reveal-l.on {
            opacity: 1;
            transform: none;
        }

        .reveal-r {
            opacity: 0;
            transform: translateX(40px);
            transition: opacity .7s, transform .7s;
        }

        .reveal-r.on {
            opacity: 1;
            transform: none;
        }

        .stagger>* {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity .6s, transform .6s;
        }

        .stagger.on>*:nth-child(1) {
            opacity: 1;
            transform: none;
            transition-delay: .05s;
        }

        .stagger.on>*:nth-child(2) {
            opacity: 1;
            transform: none;
            transition-delay: .15s;
        }

        .stagger.on>*:nth-child(3) {
            opacity: 1;
            transform: none;
            transition-delay: .25s;
        }

        .stagger.on>*:nth-child(4) {
            opacity: 1;
            transform: none;
            transition-delay: .35s;
        }

        .stagger.on>*:nth-child(5) {
            opacity: 1;
            transform: none;
            transition-delay: .45s;
        }

        .stagger.on>*:nth-child(6) {
            opacity: 1;
            transform: none;
            transition-delay: .55s;
        }

        .stagger.on>*:nth-child(7) {
            opacity: 1;
            transform: none;
            transition-delay: .65s;
        }

        .stagger.on>*:nth-child(8) {
            opacity: 1;
            transform: none;
            transition-delay: .75s;
        }

        .stagger.on>*:nth-child(9) {
            opacity: 1;
            transform: none;
            transition-delay: .85s;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(24px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        /* ── RESPONSIVE ── */
        @media(max-width:1100px) {
            .srv-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .srv-card.wide {
                grid-column: span 1;
            }

            .steps-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 40px;
            }

            .steps-grid::before {
                display: none;
            }

            .testi-grid {
                grid-template-columns: 1fr 1fr;
            }

            .foot-top {
                grid-template-columns: 1fr 1fr;
                gap: 40px;
            }
        }

        @media(max-width:800px) {
            .nav {
                padding: 0 24px;
            }

            .nav-links {
                display: none;
            }

            .hero {
                grid-template-columns: 1fr;
                min-height: auto;
            }

            .hero-left {
                padding: 60px 24px 40px;
            }

            .hero-right {
                height: 380px;
            }

            .about,
            .diff,
            .faq {
                grid-template-columns: 1fr;
                gap: 40px;
                padding: 70px 24px;
            }

            .about-yrs {
                right: 0;
            }

            .services,
            .steps,
            .cities,
            .testi {
                padding: 70px 24px;
            }

            .srv-grid {
                grid-template-columns: 1fr 1fr;
            }

            .steps-grid {
                grid-template-columns: 1fr;
            }

            .cities-grid {
                grid-template-columns: 1fr 1fr;
            }

            .testi-grid {
                grid-template-columns: 1fr;
            }

            .cta {
                margin: 0 24px 60px;
                padding: 50px 32px;
                flex-direction: column;
                text-align: center;
            }

            .cta-btns {
                align-items: center;
            }

            .cta-note {
                text-align: center;
            }

            .cta-note span {
                justify-content: center;
            }

            footer {
                padding: 60px 24px 32px;
            }

            .foot-top {
                grid-template-columns: 1fr;
                gap: 36px;
            }

            .foot-bottom {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <!-- NAV -->
    <nav class="nav" id="mainNav">
        <a href="#" class="nav-logo">
            <div class="nav-logo-mark">🗑️</div>
            <span class="nav-logo-text">JunkDrop</span>
        </a>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Blogs</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        <div class="nav-right">
            <a href="tel:+11234456789" class="nav-phone">📞 +1-123-456-789</a>
            <a href="#" class="nav-cta">Get Free Quote</a>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-left">
            <div class="hero-eyebrow"><span class="blink-dot"></span>Ontario's #1 Junk Removal</div>
            <h1 class="hero-h1">
                <span class="h1-black">Clear</span>
                <span class="h1-orange">The Clutter.</span>
                <span class="h1-black">Keep The</span>
                <span class="h1-outline">Space.</span>
            </h1>
            <p class="hero-desc"><b>Residential & commercial junk removal</b> built for speed and trust. Book online, we show up same day and haul everything away — responsibly.</p>
            <div class="hero-actions">
                <a href="#" class="btn-main">🚛 Get Free Quote</a>
                <a href="#" class="btn-ghost">📞 Book Now</a>
            </div>
            <div class="hero-stats">
                <div class="hstat">
                    <div class="hstat-num"><span class="cnt" data-t="550">0</span><em>+</em></div>
                    <div class="hstat-label">Clean-outs Done</div>
                </div>
                <div class="hstat">
                    <div class="hstat-num"><span class="cnt" data-t="10">0</span><em>K+</em></div>
                    <div class="hstat-label">Happy Customers</div>
                </div>
                <div class="hstat">
                    <div class="hstat-num">4.9<em style="color:var(--orange)">★</em></div>
                    <div class="hstat-label">Avg Rating</div>
                </div>
            </div>
        </div>
        <div class="hero-right">
            <div class="hero-right-bg"></div>
            <div class="img-main"><img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=900&auto=format&fit=crop&q=80" alt="Junk removal team at work"></div>
            <div class="img-sec"><img src="https://images.unsplash.com/photo-1585771724684-38269d6639fd?w=600&auto=format&fit=crop&q=80" alt="Clean garage after removal"></div>
            <div class="img-third"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=500&auto=format&fit=crop&q=80" alt="Clean bright space"></div>
            <div class="hero-pill">
                <div class="hero-pill-icon">⚡</div>
                <div class="hero-pill-text"><strong>Same Day Service</strong><span>Available across Ontario</span></div>
            </div>
            <div class="hero-badge">
                <div class="stars">★★★★★</div>
                <div class="rating">2,400+ Reviews</div>
                <div class="sub">Google · HomeStars</div>
            </div>
        </div>
    </section>

    <!-- MARQUEE -->
    <div class="marquee">
        <div class="marquee-track">
            <div class="marquee-item"><span class="dot"></span>Residential Junk Removal</div>
            <div class="marquee-item"><span class="dot"></span>Commercial Cleanouts</div>
            <div class="marquee-item"><span class="dot"></span>Demolition Waste</div>
            <div class="marquee-item"><span class="dot"></span>Mattress Removal</div>
            <div class="marquee-item"><span class="dot"></span>Estate Cleanouts</div>
            <div class="marquee-item"><span class="dot"></span>Construction Debris</div>
            <div class="marquee-item"><span class="dot"></span>Appliance Removal</div>
            <div class="marquee-item"><span class="dot"></span>Scrap Metal</div>
            <div class="marquee-item"><span class="dot"></span>Yard Waste</div>
            <div class="marquee-item"><span class="dot"></span>Eco-Friendly Disposal</div>
            <div class="marquee-item"><span class="dot"></span>Residential Junk Removal</div>
            <div class="marquee-item"><span class="dot"></span>Commercial Cleanouts</div>
            <div class="marquee-item"><span class="dot"></span>Demolition Waste</div>
            <div class="marquee-item"><span class="dot"></span>Mattress Removal</div>
            <div class="marquee-item"><span class="dot"></span>Estate Cleanouts</div>
            <div class="marquee-item"><span class="dot"></span>Construction Debris</div>
            <div class="marquee-item"><span class="dot"></span>Appliance Removal</div>
            <div class="marquee-item"><span class="dot"></span>Scrap Metal</div>
            <div class="marquee-item"><span class="dot"></span>Yard Waste</div>
            <div class="marquee-item"><span class="dot"></span>Eco-Friendly Disposal</div>
        </div>
    </div>

    <!-- ABOUT -->
    <section class="about">
        <div class="reveal-l">
            <div class="about-img-wrap">
                <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=700&auto=format&fit=crop&q=80" alt="JunkDrop crew">
                <div class="about-img-overlay"></div>
            </div>
            <div class="about-badge">
                <div class="about-badge-icon">🏆</div>
                <div class="about-badge-txt">
                    <strong><span class="cnt" data-t="10">0</span>K+ Customers</strong>
                    <span>Served across Ontario</span>
                </div>
            </div>
            <div class="about-yrs"><strong>8+</strong><span>YEARS<br>OF TRUST</span></div>
        </div>
        <div class="reveal-r">
            <div class="section-label">About JunkDrop</div>
            <h2 class="section-h2">Clear Space,<br>Clear Mind.<br><span>JunkDrop.</span></h2>
            <p class="section-body">JunkDrop prioritizes reliable waste collection solutions designed to make removal fast, smart, and completely stress-free. Whether it's a single piece of furniture or a full estate cleanout — we've got you covered.</p>
            <div class="check-list">
                <div class="check-row">
                    <div class="check-icon">✓</div>Same-day service — book online and we're there
                </div>
                <div class="check-row">
                    <div class="check-icon">✓</div>Responsible eco-friendly disposal and recycling
                </div>
                <div class="check-row">
                    <div class="check-icon">✓</div>Fully insured, licensed professionals
                </div>
                <div class="check-row">
                    <div class="check-icon">✓</div>Transparent upfront pricing, no hidden fees
                </div>
            </div>
            <a href="#" class="btn-main">Learn More About Us</a>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="services">
        <div class="section-header reveal">
            <div class="section-label">Our Services</div>
            <h2 class="section-h2">JunkDrop — <span>Waste Less,</span> Live More</h2>
        </div>
        <div class="srv-grid stagger">
            <div class="srv-card wide">
                <div class="srv-img"><img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&auto=format&fit=crop&q=80" alt="Residential">
                    <div class="srv-ov"></div><span class="srv-num">01</span>
                </div>
                <div class="srv-body">
                    <div class="srv-title">Residential & Commercial Waste Removal</div>
                    <div class="srv-desc">All-in-one clean-outs for homes, offices, rentals, and commercial spaces. Fast, thorough, and stress-free.</div><a href="#" class="srv-link">Learn more →</a>
                </div>
            </div>
            <div class="srv-card wide">
                <div class="srv-img"><img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=800&auto=format&fit=crop&q=80" alt="Demolition">
                    <div class="srv-ov"></div><span class="srv-num">02</span>
                </div>
                <div class="srv-body">
                    <div class="srv-title">Demolition & Construction Waste Removal</div>
                    <div class="srv-desc">Debris, drywall, concrete, lumber and more — complete job site haul-away from start to finish.</div><a href="#" class="srv-link">Learn more →</a>
                </div>
            </div>
            <div class="srv-card">
                <div class="srv-img"><img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=500&auto=format&fit=crop&q=80" alt="Mattress">
                    <div class="srv-ov"></div><span class="srv-num">03</span>
                </div>
                <div class="srv-body">
                    <div class="srv-title">Mattress Removal</div>
                    <div class="srv-desc">Responsible disposal of old mattresses, kept out of landfills wherever possible.</div><a href="#" class="srv-link">Learn more →</a>
                </div>
            </div>
            <div class="srv-card">
                <div class="srv-img"><img src="https://images.unsplash.com/photo-1595273670150-bd0c3c392e46?w=500&auto=format&fit=crop&q=80" alt="Garbage">
                    <div class="srv-ov"></div><span class="srv-num">04</span>
                </div>
                <div class="srv-body">
                    <div class="srv-title">Garbage Removal</div>
                    <div class="srv-desc">Household garbage and clutter removal — anything that won't go curbside, we handle it.</div><a href="#" class="srv-link">Learn more →</a>
                </div>
            </div>
            <div class="srv-card">
                <div class="srv-img"><img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?w=500&auto=format&fit=crop&q=80" alt="Carpet">
                    <div class="srv-ov"></div><span class="srv-num">05</span>
                </div>
                <div class="srv-body">
                    <div class="srv-title">Carpet Removal</div>
                    <div class="srv-desc">Quick carpet removal and disposal — no mess left behind for you.</div><a href="#" class="srv-link">Learn more →</a>
                </div>
            </div>
            <div class="srv-card">
                <div class="srv-img"><img src="https://images.unsplash.com/photo-1590846406792-0adc7f938f1d?w=500&auto=format&fit=crop&q=80" alt="Estate">
                    <div class="srv-ov"></div><span class="srv-num">06</span>
                </div>
                <div class="srv-body">
                    <div class="srv-title">Estate Cleanout</div>
                    <div class="srv-desc">Complete estate cleanout services — handled with care and full discretion.</div><a href="#" class="srv-link">Learn more →</a>
                </div>
            </div>
            <div class="srv-card">
                <div class="srv-img"><img src="https://images.unsplash.com/photo-1530587191325-3db32d826c18?w=500&auto=format&fit=crop&q=80" alt="Scrap">
                    <div class="srv-ov"></div><span class="srv-num">07</span>
                </div>
                <div class="srv-body">
                    <div class="srv-title">Scrap Metal</div>
                    <div class="srv-desc">Appliances, pipes, wires and more — recycled responsibly for maximum environmental benefit.</div><a href="#" class="srv-link">Learn more →</a>
                </div>
            </div>
            <div class="srv-card">
                <div class="srv-img"><img src="https://images.unsplash.com/photo-1518531933037-91b2f5f229cc?w=500&auto=format&fit=crop&q=80" alt="Yard">
                    <div class="srv-ov"></div><span class="srv-num">08</span>
                </div>
                <div class="srv-body">
                    <div class="srv-title">Yard Waste</div>
                    <div class="srv-desc">Branches, leaves, soil and outdoor clutter — seasonal clean-ups done right.</div><a href="#" class="srv-link">Learn more →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- STEPS -->
    <section class="steps">
        <div class="steps-bg">4</div>
        <div class="section-header reveal" style="margin-bottom:80px">
            <div class="section-label">How It Works</div>
            <h2 class="section-h2">Junk Removal in <span>4 Easy Steps</span></h2>
            <p style="color:var(--mid);margin-top:12px;font-size:1rem">We've streamlined the process to make junk removal as easy as possible for you.</p>
        </div>
        <div class="steps-grid stagger">
            <div class="step">
                <div class="step-circle">01<div class="step-ico">📅</div>
                </div>
                <div class="step-title">Book Online or Call</div>
                <p class="step-desc">Schedule in minutes. Choose your date and time window — same-day slots available.</p>
            </div>
            <div class="step">
                <div class="step-circle">02<div class="step-ico">💬</div>
                </div>
                <div class="step-title">Free On-Site Estimate</div>
                <p class="step-desc">Our crew arrives, assesses the job, and gives you a firm upfront quote. No surprises.</p>
            </div>
            <div class="step">
                <div class="step-circle">03<div class="step-ico">🚛</div>
                </div>
                <div class="step-title">We Haul It Away</div>
                <p class="step-desc">Approve the quote and we load everything up. We do all the heavy lifting — you just point.</p>
            </div>
            <div class="step">
                <div class="step-circle">04<div class="step-ico">♻️</div>
                </div>
                <div class="step-title">Eco Disposal</div>
                <p class="step-desc">We sort, recycle, and donate where possible. Less landfill, more responsible living.</p>
            </div>
        </div>
    </section>

    <!-- DIFFERENCE -->
    <section class="diff">
        <div class="diff-img reveal-l"><img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=700&auto=format&fit=crop&q=80" alt="JunkDrop truck"></div>
        <div class="reveal-r">
            <div class="section-label">Why Choose Us</div>
            <h2 class="section-h2">The JunkDrop<br><span>Difference</span></h2>
            <p class="section-body">We're not just another junk hauler. We're a fully-insured, eco-conscious team that takes your cleanup personally — on your schedule, at your price.</p>
            <div class="diff-pts stagger">
                <div class="diff-pt">
                    <div class="diff-pt-ico">⚡</div>
                    <div class="diff-pt-body"><strong>Same-Day Service</strong>
                        <p>We book and arrive the same day in most cases. No waiting days for availability.</p>
                    </div>
                </div>
                <div class="diff-pt">
                    <div class="diff-pt-ico">🌿</div>
                    <div class="diff-pt-body"><strong>Eco-Friendly First</strong>
                        <p>80%+ of what we collect is recycled or donated. We protect the environment we work in.</p>
                    </div>
                </div>
                <div class="diff-pt">
                    <div class="diff-pt-ico">💰</div>
                    <div class="diff-pt-body"><strong>Transparent Pricing</strong>
                        <p>Firm quotes before we start. No surprise charges, no add-on fees, ever.</p>
                    </div>
                </div>
                <div class="diff-pt">
                    <div class="diff-pt-ico">🛡️</div>
                    <div class="diff-pt-body"><strong>Fully Insured & Licensed</strong>
                        <p>Your property is protected. We're compliant, trained, and carry full liability coverage.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CITIES -->
    <section class="cities">
        <div class="section-header reveal">
            <div class="section-label" style="justify-content:center">Where We Operate</div>
            <h2 class="section-h2">Covering All Major Cities<br><span>Across Ontario</span></h2>
        </div>
        <div class="cities-grid stagger">
            <div class="city"><img src="https://images.unsplash.com/photo-1517090186835-e348b621c9ca?w=600&auto=format&fit=crop&q=80" alt="Toronto">
                <div class="city-ov"></div>
                <div class="city-lbl"><strong>Toronto</strong><span>Greater Toronto Area</span></div>
                <div class="city-arr">→</div>
            </div>
            <div class="city"><img src="https://images.unsplash.com/photo-1598900438898-d9f6e7e38f88?w=600&auto=format&fit=crop&q=80" alt="Mississauga">
                <div class="city-ov"></div>
                <div class="city-lbl"><strong>Mississauga</strong><span>Peel Region</span></div>
                <div class="city-arr">→</div>
            </div>
            <div class="city"><img src="https://images.unsplash.com/photo-1486325212027-8081e485255e?w=600&auto=format&fit=crop&q=80" alt="Barrie">
                <div class="city-ov"></div>
                <div class="city-lbl"><strong>Barrie</strong><span>Simcoe County</span></div>
                <div class="city-arr">→</div>
            </div>
            <div class="city"><img src="https://images.unsplash.com/photo-1444723121867-7a241cacace9?w=600&auto=format&fit=crop&q=80" alt="Markham">
                <div class="city-ov"></div>
                <div class="city-lbl"><strong>Markham</strong><span>York Region</span></div>
                <div class="city-arr">→</div>
            </div>
            <div class="city"><img src="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?w=600&auto=format&fit=crop&q=80" alt="Oshawa">
                <div class="city-ov"></div>
                <div class="city-lbl"><strong>Oshawa</strong><span>Durham Region</span></div>
                <div class="city-arr">→</div>
            </div>
            <div class="city"><img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&auto=format&fit=crop&q=80" alt="Brampton">
                <div class="city-ov"></div>
                <div class="city-lbl"><strong>Brampton</strong><span>Peel Region</span></div>
                <div class="city-arr">→</div>
            </div>
        </div>
        <div class="cities-more reveal"><a href="#" class="btn-outline">View All Service Areas →</a></div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="testi">
        <div class="section-header reveal">
            <div class="section-label" style="justify-content:center">Customer Reviews</div>
            <h2 class="section-h2">What <span>Canadians</span> Say About Us</h2>
        </div>
        <div class="testi-grid stagger">
            <div class="testi-card feat">
                <div class="testi-stars">★★★★★</div>
                <p class="testi-text">"Amazing service! Booked online, they arrived the same day. Removed an entire basement of construction debris in under 2 hours — very professional team."</p>
                <div class="testi-author">
                    <div class="testi-av">MC</div>
                    <div>
                        <div class="testi-name">Michael Chen</div>
                        <div class="testi-loc">📍 Vancouver, BC</div>
                    </div>
                </div>
            </div>
            <div class="testi-card">
                <div class="testi-stars">★★★★★</div>
                <p class="testi-text">"Hands down the best junk removal experience. The crew was polite, fast, and left my garage spotless. Will use again for sure."</p>
                <div class="testi-author">
                    <div class="testi-av">SR</div>
                    <div>
                        <div class="testi-name">Sarah Robertson</div>
                        <div class="testi-loc">📍 Toronto, ON</div>
                    </div>
                </div>
            </div>
            <div class="testi-card">
                <div class="testi-stars">★★★★★</div>
                <p class="testi-text">"Transparent pricing, no surprises. They hauled out all the furniture from our office renovation. Highly recommend for commercial clients."</p>
                <div class="testi-author">
                    <div class="testi-av">DK</div>
                    <div>
                        <div class="testi-name">David Kim</div>
                        <div class="testi-loc">📍 Markham, ON</div>
                    </div>
                </div>
            </div>
            <div class="testi-card">
                <div class="testi-stars">★★★★★</div>
                <p class="testi-text">"I called at 8am and they were at my door by noon. Estate cleanout done in one afternoon. Compassionate and very efficient team."</p>
                <div class="testi-author">
                    <div class="testi-av">LM</div>
                    <div>
                        <div class="testi-name">Linda Marchetti</div>
                        <div class="testi-loc">📍 Barrie, ON</div>
                    </div>
                </div>
            </div>
            <div class="testi-card">
                <div class="testi-stars">★★★★★</div>
                <p class="testi-text">"Super easy to book online. The guys showed up on time, swept up after themselves, and the price matched the quote exactly. Refreshing!"</p>
                <div class="testi-author">
                    <div class="testi-av">JP</div>
                    <div>
                        <div class="testi-name">James Park</div>
                        <div class="testi-loc">📍 Mississauga, ON</div>
                    </div>
                </div>
            </div>
            <div class="testi-card">
                <div class="testi-stars">★★★★★</div>
                <p class="testi-text">"Used them for post-renovation debris. Fast, friendly, and I love that they recycle. Booked them again two weeks later for yard waste."</p>
                <div class="testi-author">
                    <div class="testi-av">AT</div>
                    <div>
                        <div class="testi-name">Anna Tran</div>
                        <div class="testi-loc">📍 Oshawa, ON</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq">
        <div class="reveal-l">
            <div class="section-label">Got Questions?</div>
            <h2 class="section-h2">Frequently<br>Asked<br><span>Questions</span></h2>
            <div class="faq-img"><img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=600&auto=format&fit=crop&q=80" alt="Team"></div>
        </div>
        <div class="reveal-r">
            <div class="faq-item open">
                <div class="faq-q" onclick="toggleFaq(this)">What demolition services do you provide?<span class="faq-ico">+</span></div>
                <div class="faq-a">We offer complete demolition support including residential and commercial interior demo, deck and shed removal, hot tub removal, and full construction site clean-up — from tear-down to final haul-away.</div>
            </div>
            <div class="faq-item">
                <div class="faq-q" onclick="toggleFaq(this)">Do you handle permits and approvals?<span class="faq-ico">+</span></div>
                <div class="faq-a">For larger demolition projects, we can advise on what permits may be needed and help coordinate with your local municipality. For standard junk removal, no permits are typically required.</div>
            </div>
            <div class="faq-item">
                <div class="faq-q" onclick="toggleFaq(this)">Is demolition safe for nearby properties?<span class="faq-ico">+</span></div>
                <div class="faq-a">Absolutely. Our crew is trained in safe demolition practices, uses proper barriers and dust controls, and is fully insured. We take every precaution to protect your neighbors and surrounding structures.</div>
            </div>
            <div class="faq-item">
                <div class="faq-q" onclick="toggleFaq(this)">How long does a demolition project take?<span class="faq-ico">+</span></div>
                <div class="faq-a">Most residential jobs take 1–3 days depending on scope. Interior demo of a single room is usually done in a few hours. We'll give you a realistic timeline during your free on-site estimate.</div>
            </div>
            <div class="faq-item">
                <div class="faq-q" onclick="toggleFaq(this)">What areas do you serve?<span class="faq-ico">+</span></div>
                <div class="faq-a">We serve the Greater Toronto Area, Barrie, Markham, Oshawa, Vaughan, Mississauga, Brampton, and surrounding Ontario communities. Not sure? Give us a call!</div>
            </div>
            <div class="faq-item">
                <div class="faq-q" onclick="toggleFaq(this)">How is your pricing determined?<span class="faq-ico">+</span></div>
                <div class="faq-a">Pricing is based on volume and weight. We provide a firm, all-inclusive quote on-site before any work begins. No hourly rates, no hidden fees — ever.</div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <div class="cta reveal">
        <div class="cta-txt">
            <h2>Ready to Clear<br>Your Space?</h2>
            <p>Get started with a free quote — same-day service available. No obligation, no hidden fees, just a cleaner space waiting for you.</p>
        </div>
        <div class="cta-btns">
            <a href="#" class="btn-white">🚛 Get Free Quote</a>
            <a href="#" class="btn-wghost">📞 Book Now</a>
            <div class="cta-note">
                <span>✓ Free Estimates</span>
                <span>✓ No Hidden Fees</span>
                <span>✓ Eco-Friendly</span>
            </div>
        </div>
        <div class="cta-big-text">JUNK</div>
    </div>

    <!-- FOOTER -->
    <footer>
        <div class="foot-top">
            <div>
                <div class="foot-brand">
                    <div class="foot-mark">🗑️</div>JunkDrop
                </div>
                <p class="foot-desc">Canada's trusted residential and commercial junk removal company. Fast, eco-friendly, and transparent solutions from start to finish.</p>
                <div class="foot-socials">
                    <a href="#" class="foot-social">📘</a>
                    <a href="#" class="foot-social">📸</a>
                    <a href="#" class="foot-social">🐦</a>
                    <a href="#" class="foot-social">💼</a>
                </div>
            </div>
            <div>
                <div class="foot-col-title">Quick Links</div>
                <ul class="foot-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Get a Quote</a></li>
                </ul>
            </div>
            <div>
                <div class="foot-col-title">Our Services</div>
                <ul class="foot-links">
                    <li><a href="#">Residential Removal</a></li>
                    <li><a href="#">Commercial Cleanouts</a></li>
                    <li><a href="#">Demolition Waste</a></li>
                    <li><a href="#">Mattress Removal</a></li>
                    <li><a href="#">Estate Cleanouts</a></li>
                    <li><a href="#">Scrap Metal</a></li>
                    <li><a href="#">Yard Waste</a></li>
                </ul>
            </div>
            <div>
                <div class="foot-col-title">Contact Us</div>
                <div class="foot-contacts">
                    <div class="foot-contact"><span>📞</span><span>+1-123-456-789</span></div>
                    <div class="foot-contact"><span>✉️</span><span>info@junkdrop.ca</span></div>
                    <div class="foot-contact"><span>📍</span><span>Toronto, Ontario, Canada</span></div>
                    <div class="foot-contact"><span>🕐</span><span>Mon–Sat: 7am – 7pm<br>Sun: 8am – 5pm</span></div>
                </div>
            </div>
        </div>
        <div class="foot-bottom">
            <span>© 2025 JunkDrop. All rights reserved.</span>
            <div class="foot-bottom-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Sitemap</a>
            </div>
        </div>
    </footer>

    <script>
        // Nav scroll
        const nav = document.getElementById('mainNav');
        window.addEventListener('scroll', () => nav.classList.toggle('scrolled', scrollY > 50));

        // Scroll reveal
        const obs = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('on');
                    obs.unobserve(e.target);
                }
            });
        }, {
            threshold: .12
        });
        document.querySelectorAll('.reveal,.reveal-l,.reveal-r,.stagger').forEach(el => obs.observe(el));

        // Counter
        function countUp(el) {
            const t = +el.dataset.t,
                dur = 2000,
                s = performance.now();
            const tick = now => {
                const p = Math.min((now - s) / dur, 1);
                el.textContent = Math.round((1 - Math.pow(1 - p, 3)) * t);
                if (p < 1) requestAnimationFrame(tick);
            };
            requestAnimationFrame(tick);
        }
        const cObs = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    countUp(e.target);
                    cObs.unobserve(e.target);
                }
            });
        }, {
            threshold: .5
        });
        document.querySelectorAll('.cnt').forEach(el => cObs.observe(el));

        // FAQ
        function toggleFaq(btn) {
            const item = btn.closest('.faq-item');
            const wasOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
            if (!wasOpen) item.classList.add('open');
        }
    </script>
</body>

</html>