@extends('layouts.main-layout')

@section('content')

    <main>
        <section>

            <div class="container">

                <h1>
                    Current Series
                </h1>

                <div class="list-cards">
                    <div class="card">
                        <a href="card">
                            <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="Action Comics">
                            <h4>
                                Action Comics
                            </h4>
                        </a>
                    </div>

                    <div class="card">
                        <a href="card">
                            <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01" alt="American Vampire 1976">
                        <h4>
                            American Vampire 1976
                        </h4>
                        </a>
                    </div>

                    <div class="card">
                        <a href="card">
                            <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2018/08/AQMv4_UW_153-001_HD_5b7efa1745a9b8.08589135.jpg?itok=HPTtnrsb" alt="Aquaman">
                        <h4>
                            Aquaman
                        </h4>
                        </a>
                    </div>

                    <div class="card">
                        <a href="card">
                            <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/06/batgirl_v5_1_5b23e1f1124941.50950783.jpg?itok=VnrJah76" alt="Batgirl">
                        <h4>
                            Batgirl
                        </h4>
                        </a>
                    </div>

                    <div class="card">
                        <a href="card">
                            <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ" alt="Batman">
                        <h4>
                            Batman
                        </h4>
                        </a>
                    </div>

                    <div class="card">
                        <a href="card">
                            <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ" alt="Batman Beyond">
                        <h4>
                            Batman Beyond
                        </h4>
                        </a>
                    </div>

                    <div class="card">
                        <a href="card">
                            <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2019/08/BMSM_5d4361b7116261.74371456.jpg?itok=kEDR2OL8" alt="Batman/Superman">
                        <h4>
                            Batman/Superman
                        </h4>
                        </a>
                    </div>

                    <div class="card">
                        <a href="card">
                            <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=azz5sfGk" alt="Batman/Superman Annual">
                        <h4>
                            Batman/Superman Annual
                        </h4>
                        </a>
                    </div>

                    <div class="card">
                        <a href="card">
                            <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMTJWZ_01_300-001_HD_5f5ff2307dcb37.34652945.jpg?itok=VswVjLR8" alt="Batman: The Joker War Zone">
                        <h4>
                            Batman: The Joker War Zone
                        </h4>
                        </a>
                    </div>

                    <div class="card">
                        <a href="card">
                            <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/08/cover-v2_5f40314645a734.37285065.png?itok=ImNM2QBY" alt="Batman: Three Jokers">
                        <h4>
                            Batman: Three Jokers
                        </h4>
                        </a>
                    </div>

                    <div class="card">
                        <a href="card">
                            <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=sVwALbUX" alt="Batman: White Knight Presents: Harley Quinn">
                        <h4>
                            Batman: White Knight Presents: Harley Quinn
                        </h4>
                        </a>
                    </div>

                    <div class="card">
                        <a href="card">
                            <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2019/04/CTWv1_CC_144-001_HD_5ca5299a751963.53054221.jpg?itok=ooPaoLDq" alt="Catwoman">
                        <h4>
                            Catwoman
                        </h4>
                        </a>
                    </div>
                </div>

                <div class="btn-load">
                    <a href="#">
                        Load More
                    </a>
                </div>

            </div>

            <div class="icons">
                <ul>
                    <li>
                        <a href="/">
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="Digital Comics">
                            Digital Comics
                        </a>
                    </li>
        
                    <li>
                        <a href="/">
                            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="Dc Merchandise">
                            Dc Merchandise
                        </a>
                    </li>
        
                    <li>
                        <a href="/">
                            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="Subscription">
                            Subscription
                        </a>
                    </li>
        
                    <li>
                        <a href="/">
                            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="Comic Shop Locator">
                            Comic Shop Locator
                        </a>
                    </li>
        
                    <li>
                        <a href="/">
                            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="Dc Power Visa">
                            Dc Power Visa
                        </a>
                    </li>
                </ul>
            </div>

        </section>
    </main>

@endsection
