<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/home page/logo.png">
    <link rel="stylesheet" href="{{ asset('style/resuable.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/partnerpage.css') }}" />
    <script src="{{ asset('/script.js') }}" defer></script>
    <title>Pages</title>
</head>
<body>
    @include("frontend.layouts.header")
    <div class="partner-page container" style="margin-top: 100px;">
        <div class="uppermost">
            <div class="hr-left-heading"><h3>What is a TACK School Partnership?</h3>
                <hr></div>
            <p class="sb-para medium">A TACK School Partnership is an alliance or affiliation between TACK and a school or other educational
                organisation. It assists both partners to achieve their educational vision and contribute to their mission.
                The TACK school partnership is an informal way for both partners to benefit from the other by sharing their
                knowledge, experience and resources, so that they can provide better learning outcomes for their students.
                A partnership may not generate further income streams between the two parties though may indirectly lead tofurther business for one or both of the parties or include activity that requires payment between the parties.</p>
        </div>

        <div class="no-list">
            <h5 class="page-h4">What is the purpose of a partnership between TACK and a school or organisation?</h5>
            <p class="sb-para medium">Both parties work to identify aspects that would mutually benefit their work. These become ‘targeted activities’.
                They are bespoke to each partnership but may include:</p>
        </div>

        <div class="with-list">
            <h5 class="page-h4">A Partner School may benefit by having</h5>

            <ul class="page-ul">
                <li class="page-li sb-para medium">A presence in the school’s calendar of cultural experiences - for example, Arabic celebrations, Arabic food </li>
                <li class="page-li sb-para medium">Support for reflecting Arabic in the school environment, for example, Arabic script in school displays </li>
                <li class="page-li sb-para medium">Advice and support for staff in order to celebrate and affirm Arabic culture in the school environment
                </li>
                <li class="page-li sb-para medium">Support for communication for Arabic-speaking pupils and families with limited English, for example, to
                </li>
                <li class="page-li sb-para medium">Achieve effective transitions into school where there is no or limited English at home
                </li>
                <li class="page-li sb-para medium">Support for the translation of key school documentation into Arabic
                </li>
                <li class="page-li sb-para medium">Link to the school website and listed as a partner on TACK website</li>
            </ul>
        </div>

        <div class="with-list">
            <h5 class="page-h4">TACK may benefit from:</h5>

            <ul class="page-ul">
                <li class="page-li medium sb-para">Provision of space for after-school/weekend school resources</li>
                <li class="page-li medium sb-para">Opportunities to observe classrooms and classroom teaching</li>
                <li class="page-li medium sb-para">Dissemination of information to parents and the community via school information routes</li>
                <li class="page-li medium sb-para">Links to the TACK Website from the school website.</li>
            </ul>
        </div>

        <div class="no-list">
            <h5 class="page-h4">What is involved in a TACK School Partnership?</h5>
            <p class="sb-para medium">Both partners will meet to clarify the activities and benefits they wish to take place as a result of the partnership. A memorandum of understanding will be created by TACK and signed by leadership of both organisations. The memorandum of agreement will clearly define a set of objectives and will reflect the needs of both partners entering an agreement via a Memorandum of Understanding.</p>
        </div>

        <div class="with-list">
            <h4 class="page-h4">It will include:</h4>

            <ul class="page-ul">
                <li class="page-li sb-para medium">The aims of the partnership</li>
                <li class="page-li sb-para medium">Who will be the partnership lead from each institution
                </li>
                <li class="page-li sb-para medium">Specific activities, year groups, deadlines and timescales the partnership will cover
                </li>
                <li class="page-li sb-para medium">How the performance (including impact and outcomes) of the partnership will be monitored
                </li>
                <li class="page-li sb-para medium">How the partnership will be funded (may not apply)</li>
            </ul>
        </div>


        <div class="red-para sb-para bold" style="margin-bottom:50px;">Partners will agree how and when to monitor the impact and efficiency of their partnership so that the
            arrangement remains relevant to both. <br> The partnership can be dissolved by either party as per the terms of agreement to be mutually agreed (and
            documented in the memorandum of understanding).
        </div>
    </div>
    @include("frontend.layouts.footer")

    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ asset('/scrolll.js.js') }}"></script>
</body>
</html>