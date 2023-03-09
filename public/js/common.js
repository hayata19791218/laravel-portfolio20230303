// //ローディング
// const percent = document.getElementById('percent');
// const loading = document.getElementById('loading');

// window.addEventListener('load',() =>{
//     const loadingOpacity = () =>{
//         loading.classList.add('opacity');
//     }
//     setTimeout(loadingOpacity,2800);
// });

// let counter = 0;
// const timer = setInterval(function(){
//     percent.innerHTML = `${counter}%`;
//     counter ++;
//     if(counter > 100) clearInterval(timer);
// },20);

// //svgのアニメーション
// new Vivus('logo', 
//     {   duration: 100,
//         start: 'autostart',
//         pathTimingFunction: Vivus.EASE_OUT
//     }, 
//     function(obj){
//         obj.el.classList.add('fill');
//     }
// );

//円がフェードイン
let circleFadeIn = document.querySelectorAll('.title-circle');
for(let i = 0;i < circleFadeIn.length;i ++){
    window.addEventListener('scroll',function(){
        const rect = circleFadeIn[i].getBoundingClientRect().top;
        const scroll = window.pageYOffset;
        const offset = rect + scroll;
        const windowHeight = window.innerHeight; 
        
        if(scroll > offset - windowHeight + 150){
            circleFadeIn[i].classList.add('circle-fadein');
        }else{
            circleFadeIn[i].classList.remove('circle-fadein');
        }
    });
}

// トップに戻るボタン
const topButton = document.getElementById('topButton');
window.addEventListener('scroll',() => {
    const scroll = window.pageYOffset;
    if(scroll > 200){
        topButton.classList.add('button-fade');
    }else{
        topButton.classList.remove('button-fade');
    }
});
topButton.addEventListener('click',() => {
    window.scroll({
        top:0,
        behavior:'smooth'
    });
});

// フェードイン
let itemFadeIn = document.querySelectorAll('.item');
for(let i = 0;i < itemFadeIn.length;i ++){
    window.addEventListener('scroll',function(){
        const rect = itemFadeIn[i].getBoundingClientRect().top;
        const scroll = window.pageYOffset;
        const offset = rect + scroll;
        const windowHeight = window.innerHeight; 
        
        if(scroll > offset - windowHeight + 150){
            itemFadeIn[i].classList.add('item-fadein');
        }else{
            itemFadeIn[i].classList.remove('item-fadein');
        }
    });
}
let consciousFadeIn = document.querySelectorAll('.conscious-list');
for(let i = 0;i < consciousFadeIn.length;i ++){
    window.addEventListener('scroll',function(){
        const rect = consciousFadeIn[i].getBoundingClientRect().top;
        const scroll = window.pageYOffset;
        const offset = rect + scroll;
        const windowHeight = window.innerHeight; 
        
        if(scroll > offset - windowHeight + 150){
            consciousFadeIn[i].classList.add('conscious-fadein');
        }else{
            consciousFadeIn[i].classList.remove('conscious-fadein');
        }
    });
}

// Holidayの上にあるポリゴン
window.addEventListener('load', init); 
function init() {
    const width = 100;
    const height = 100;
    
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(35, width / height);
    camera.position.set(0.5, 0.5, +1000);

    const geometry = new THREE.IcosahedronGeometry( 300, 1 );
    const material = new THREE.MeshBasicMaterial({color: 0x0461b8, wireframe: true});
    const box = new THREE.Mesh(geometry, material);
    scene.add(box);
        
    const renderer = new THREE.WebGLRenderer({
        canvas: document.querySelector('#canvas'),
        alpha:true
    },);

    renderer.setClearColor(0x000000, 0);

    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize(width, height);

    function animate() {
        box.rotation.x += 0.003;
        box.rotation.y += 0.01;
        renderer.render(scene, camera); 
        requestAnimationFrame(animate);
    }
    animate();
} 

// スムーススクロール
const smoothScrollTrigger = document.querySelectorAll('a[href^="#"]');
for (let i = 0; i < smoothScrollTrigger.length; i++) {
    smoothScrollTrigger[i].addEventListener('click', (e) => {
        
        e.preventDefault();
        
        let href = smoothScrollTrigger[i].getAttribute('href'); 
        let targetElement = document.getElementById(href.replace('#', '')); 
        
        const rect = targetElement.getBoundingClientRect().top; 
        window.scrollTo({
            top: rect,
            behavior: 'smooth',
        });
    });
}