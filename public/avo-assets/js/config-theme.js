/* --------------------------------------------------------------------------
 * File        : config-theme.js
 * Author      : indonez
 * Author URI  : http://www.indonez.com
 *
 * Indonez Copyright 2020 All Rights Reserved.
 * -------------------------------------------------------------------------- 
 * javascript handle initialization
    1. Slideshow
    2. Testimoni carousel
    3  Tradingview widget
    4. Mobile nav button
 * -------------------------------------------------------------------------- */

    'use strict';

    const HomepageApp = {
        //----------- 1. Slideshow -----------
        theme_slideshow: function() {
            const path = location.pathname;

            new CarouselConfig({
                element: '#slideshow',              // carousel element id
                fadeTransition: false,              // default is slide, use 'true' if want use fade effect
                interval: 6000,                     // interval between change slide
                control: {
                    type: 'button',                 // the options is: 'button', 'indicator' and 'both'
                    onHover: true                   // control appears when hover in careousel element
                },
                height: {                           // height for every devices
                    desktop: '723px',
                    tablet: '493px',
                    phone: '512px'
                }
            }).init();

            if(path.includes('homepage2') || path.includes('homepage4')) {
                new CarouselConfig({
                    element: '#slideshow',          // carousel element id
                    fadeTransition: false,          // default is slide, use 'true' if want use fade effect
                    interval: 6000,                 // interval between change slide
                    control: {
                        type: 'button',             // the options is: 'button', 'indicator' and 'both'
                        onHover: true               // control appears when hover in careousel element
                    },
                    height: {                       // height for every devices
                        desktop: '604px',
                        tablet: '463px',
                        phone: '476px'
                    }
                }).init();
            }
        },
        //----------- 2. Testimoni carousel -----------
        theme_testimoni: function() {
            new CarouselConfig({
                element: '#testimoni',              // carousel element id
                fadeTransition: false,              // default is slide, use 'true' if want use fade effect
                interval: 9000,                     // interval between change slide
                control: {
                    type: 'indicator',              // the options is: 'button', 'indicator' and 'both'
                    onHover: false                  // control appears when hover in careousel element
                },
                height: {                           // height for every devices
                    desktop: '238px',
                    tablet: '260px',
                    phone: '320px'
                }
            }).init();
        },
        //---------- 3. Tradingview widget -----------
        theme_tradingview: function() {
            const path = location.pathname;

            if(path.includes('index') || !path.includes('.html')) {
                new TradingviewWidget({
                    element: "#tradingview-widget",
                    height: 150,
                    type: "mini-chart",
                    theme: "light",
                    symbol : "MRK"                  // symbol based on Tradingview
                }).init();
            }

            if(path.includes('homepage2')) {
                new TradingviewWidget({
                    element: "#tradingview-widget",
                    height: 361,
                    type: "market-overview",
                    theme: "light",
                    symbol: [                       // array of instruments symbol based on Tradingview
                        {s: "FX:EURUSD"},
                        {s: "FX:GBPUSD"},
                        {s: "FX:USDJPY"},
                        {s: "FX:USDCHF"},
                        {s: "FX:AUDUSD"},
                        {s: "FX:USDCAD"}
                    ]
                }).init()
            }
        },
        //---------- 4. Mobile nav button -----------
        theme_mobilenav: function() {
            new MobileNavbar({
                addonButtons: true,                 // options to use addon buttons, set it "false" if you won't use addon buttons
                buttons: [
                    {
                        name: 'Login',              // button name
                        url: '',                    // button url
                        type: 'primary',            // button type (default, primary, secondary, danger, text)
                        icon: 'sign-in-alt'         // button icon, you can use all icons from here : https://fontawesome.com/icons?d=gallery&s=solid&m=free
                    },
                ]
            }).init();
        },
        theme_init: function() {
            HomepageApp.theme_slideshow();
            HomepageApp.theme_testimoni();
            HomepageApp.theme_tradingview();
            HomepageApp.theme_mobilenav();
        }
    }
    
    document.addEventListener('DOMContentLoaded', function() {
        HomepageApp.theme_init();
    });