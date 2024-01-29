import {swipe} from '/assets/js/swipebanner.js';

async function loadHomeData() {
    var bannerHome = document.querySelector('._bannerHome');
    var trending = document.querySelector('._trending');

    const responses = await Promise.all([
        await fetch('banner/home', {method: 'get'}),
        await fetch('trending/home', {method: 'get'})
    ]);

    const bannerHtml = await responses[0].text();
    const trendingHtml = await responses[1].text();

    bannerHome.innerHTML = bannerHtml;
    trending.innerHTML = trendingHtml;
    swipe('.sliderFeaturedPosts');

    // !! Load Banner Home
    // const dataBanner = await fetch('banner/home', {
    //     method: 'get'
    // });
    // const bannerHtml = await dataBanner.text();
    // bannerHome.innerHTML = bannerHtml;
    // swipe('.sliderFeaturedPosts');
    
    // // !! Load Trending Home
    // const dataTrending = await fetch('trending/home', {
    //     method: 'get'
    // });
    // const trendingHtml = await dataTrending.text();
    // trending.innerHTML = trendingHtml;

}

loadHomeData();

// fetch('/banner/home', {
//     method: 'get'
// }).then(response => response.text()).then(html => {
//     bannerHome.innerHTML = html;
//     swipe('.sliderFeaturedPosts');
// }).catch(error => console.log(error))