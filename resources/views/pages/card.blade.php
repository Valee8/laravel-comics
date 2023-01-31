@extends('layouts.main-layout')

@section('content')
    
    <div class="single-card">

        <div class="series">
            <div class="container">
                <div class="series-img">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="Action Comics">
                    <div class="view-gallery-link">
                        <a href="/">
                            View Gallery
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="info-content-card">

                <h1>
                    Action Comics &num;1000: The Deluxe Edition
                </h1>

                <div class="informations">

                    <div class="card-info">
                        US.Price: <span>&dollar;19.99</span>
                    </div>

                    <div class="card-info">
                        AVAILABLE
                    </div>

                    <div class="card-info">
                        <span>Check Availability &dtrif;</span> 
                    </div>

                </div>

                <p class="card-description">

                    The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!

                </p>

            </div>


            <div class="adv">
                <h3>
                    Advertisement
                </h3>

                <a href="/">
                    <img src="{{ Vite::asset('resources/img/advertisement.jpg') }}" alt="Advertisement">
                </a>

            </div>

        </div>


        <div class="info-series">

            <div class="container">

                <div class="talent">

                    <h2>
                        Talent
                    </h2>

                    <ul>
                        <li>
                            <span>Art by:</span> 
                            <span>
                                José Luis García-López, Clay Mann, Rafael Albuquerque, Patrick Gleason,Dan Jurgens, Joe Shuster, Neal Adams, Curt Swan, John Cassaday, Olivier Coipel, Jim Lee
                            </span>
                        </li>

                        <li>
                            <span>Written by:</span>
                            <span>
                                Brad Meltzer, Tom King, Scott Snyder, Geoff Johns, Brian Michael Bendis, Paul Dini, Louise Simonson, Richard Donner, Marv Wolfman, Peter J. Tomasi, Dan Jurgens, Jerry Siegel, Paul Levitz
                            </span>
                        </li>
                    </ul>
    
                </div>
    
    
                <div class="specs">

                    <h2>
                        Specs
                    </h2>

                    <ul>
                        <li>
                            <span>Series:</span> <span>ACTION COMICS</span>
                        </li>

                        <li>
                            <span>U.S. Price:</span> <span>&dollar;19.99</span>
                        </li>

                        <li>
                            <span>On Sale Date:</span> <span>Oct 02 2018</span>
                        </li>
                    </ul>
    
                </div>
            </div>

            <div class="links-single-card">
                <div class="container">
                    <ul>
                        <li>
                            <a href="/">
                                <span>Digital Comics</span>
                                <div class="links-img"></div>
                            </a>

                        </li>
        
                        <li>
                            <a href="/">
                                <span>Shop Dc</span>
                                <div class="links-img"></div>
                            </a>
                        </li>
        
                        <li>
                            <a href="/">
                                <span>Comic Shop Locator</span>
                                <div class="links-img"></div>
                            </a>
                        </li>
        
                        <li>
                            <a href="/">
                                <span>Subscriptions</span>
                                <div class="links-img"></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>

    </div>

@endsection