import {swipe} from '/assets/js/swipebanner.js';

async function loadHomeData() {
    var bannerHome          = document.querySelector('._bannerHome');

    // const responses = await Promise.all([
    //     await fetch('banner/home', {method: 'get'}),
    //     await fetch('trending/home', {method: 'get'}),
    //     await fetch('recent/home', {method: 'get'}),
    //     await fetch('category/culture', {method: 'get'}),
    //     await fetch('category/business', {method: 'get'}),
    //     await fetch('category/lifestyle', {method: 'get'})
    // ]);

    // const bannerHtml            = await responses[0].text();
    // const trendingHtml          = await responses[1].text();
    // const recentHtml            = await responses[2].text();
    // const categoryCultureHtml   = await responses[3].text();
    // const categoryBusinessHtml  = await responses[4].text();
    // const categoryLifestyleHtml = await responses[5].text();

    // bannerHome.innerHTML    = bannerHtml;
    // recent.innerHTML        = recentHtml;

    // var trending    = document.querySelector('._trending');
    // trending.innerHTML      = trendingHtml;

    // categoryCulture.innerHTML = categoryCultureHtml;
    // categoryBusiness.innerHTML = categoryBusinessHtml;
    // categoryLifestyle.innerHTML = categoryLifestyleHtml;




    
    
    // !! Load Banner Home
    const dataBanner = await fetch('banner/home', {
            method: 'get'
        });
        const bannerHtml = await dataBanner.text();
        bannerHome.innerHTML = bannerHtml;
        swipe('.sliderFeaturedPosts');

        // // !! Load Recent

        // const dataRecent = await fetch('recent/home', {
        //     method: 'get'
        // });
        // const recentHtml = await dataRecent.text();
        // recent.innerHTML = recentHtml;
        
        // // !! Load Trending Home
        // var trending    = document.querySelector('._trending');
        // const dataTrending = await fetch('trending/home', {method: 'get'});
        // const trendingHtml = await dataTrending.text();
        // trending.innerHTML = trendingHtml;

        // // !! Load Culture Category

        // const dataCulture = await fetch('category/culture', {method: 'get'});
        // const categoryCultureHtml = await dataCulture.text();
        // categoryCulture.innerHTML = categoryCultureHtml;

        // // !! Load Business

        // const dataBusiness = await fetch('category/business', {method: 'get'});
        // const categoryBusinessHtml = await dataBusiness.text();
        // categoryBusiness.innerHTML = categoryBusinessHtml;

        // // !! Load Lifestyle

        // const dataLifestyle = await fetch('category/lifestyle', {method: 'get'});
        // const categoryLifestyleHtml = await dataLifestyle.text();
        // categoryLifestyle.innerHTML = categoryLifestyleHtml;



            
}

loadHomeData();

// fetch('/banner/home', {
//     method: 'get'
// }).then(response => response.text()).then(html => {
//     bannerHome.innerHTML = html;
//     swipe('.sliderFeaturedPosts');
// }).catch(error => console.log(error))