console.log('Hello World, I am Shivam Abraham');

const menu = document.querySelector('.menu');
const navigation = document.querySelector('.navigation');
const navigationLink = document.querySelectorAll('.navigation-link');

menu.addEventListener('click',()=>{
navigation.classList.toggle('navigation-active');
menu.classList.toggle('menu-active');
})
navigationLink.forEach((link)=>{
    link.addEventListener('click',()=>{
        console.log('link clicked');
        navigation.classList.remove('navigation-active');
        menu.classList.remove('menu-active');
    })
})

const heroHeading = document.querySelector('#hero-heading');
const hero = document.querySelector('.hero-image')
const img = document.getElementById('img');
const tl = new TimelineMax();

tl.fromTo(hero,1,{transform:"scale(0,0)"},{transform:"scale(1,1)"})
.fromTo(img,1,{width: '100%'}, {width:"95%"})
.fromTo(heroHeading,.8,{y:"50px",opacity:"0"},{y:"0",opacity:"1"}, "-=.7");

const courses = [
    {
        img: './images/cousrse1.jpg',
        courseName: 'Html',
        desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cupiditate odit assumenda culpa nostrum voluptates.',
        cateogary: 'Web Devlopment'
    },
    {
        img: './images/cousrse2.jpg',
        courseName: 'Css',
        desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cupiditate odit assumenda culpa nostrum voluptates.',
        cateogary: 'Web Devlopment'
    },
    {
        img: './images/cousrse3.jpg',
        courseName: 'Javascript',
        desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cupiditate odit assumenda culpa nostrum voluptates.',
        cateogary: 'Web Devlopment'
    },
    {
        img: './images/cousrse1.jpg',
        courseName: 'WebApp Penetration Testing',
        desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cupiditate odit assumenda culpa nostrum voluptates.',
        cateogary: 'Cyber Security'
    },
    {
        img: './images/cousrse2.jpg',
        courseName: 'Wireless Penetration Testing',
        desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cupiditate odit assumenda culpa nostrum voluptates.',
        cateogary: 'Cyber Security'
    },
    {
        img: './images/cousrse3.jpg',
        courseName: 'IOT Penetration Testing',
        desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cupiditate odit assumenda culpa nostrum voluptates.',
        cateogary: 'Cyber Security'
    },
    {
        img: './images/cousrse1.jpg',
        courseName: 'Server Setup',
        desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cupiditate odit assumenda culpa nostrum voluptates.',
        cateogary: 'System Administration'
    },
    {
        img: './images/cousrse2.jpg',
        courseName: 'Computer Programming',
        desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cupiditate odit assumenda culpa nostrum voluptates.',
        cateogary: 'System Administration'
    },
    {
        img: './images/cousrse3.jpg',
        courseName: 'Linux Administration',
        desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cupiditate odit assumenda culpa nostrum voluptates.',
        cateogary: 'System Administration'
    }
]
const courseContaner =  document.querySelector('.courses'); 
const courseBtns = document.querySelector('.btn-container');
const cat = ['All',...new Set( courses.map((course)=>course.cateogary))]

console.log(cat);

courseBtns.innerHTML = cat.map((btn)=>{
return `<button class="btns">${btn}</button>`
}).join("");

const course = courses.map((item)=>item)

function displaycourse(courses){
    courseContaner.innerHTML = course.map((course)=>{
        return `
        <div class="course">
                <figure>
                    <img src="${course.img}" alt="Course Image Of GICS">
                    <figcaption>
                    <h2>${course.courseName}</h2>
                    <p>${course.desc}</p>
                    </figcaption>
                    </figure>
            </div>`
        }).join("");
}
courseContaner.innerHTML = course.map((course)=>{
return `
<div class="course">
        <figure>
            <img src="${course.img}" alt="Course Image Of GICS">
            <figcaption>
            <h2>${course.courseName}</h2>
            <p>${course.desc}</p>
            </figcaption>
            </figure>
    </div>`
}).join("");

const btns = document.querySelectorAll('.btns');
btns.forEach((element)=>{
    element.addEventListener('click',function(e){
        btns.forEach((item)=>{
            if(item === element){
                item.classList.add('active-btn');
            }
            else{
                item.classList.remove('active-btn');
            }
        }) // ends here

        // course filteration
        const curentitem = e.currentTarget.innerHTML;
courseContaner.innerHTML = courses.map((e)=>{
    if(curentitem === e.cateogary){
        return  `
        <div class="course">
                <figure>
                    <img src="${e.img}" alt="Course Image Of GICS">
                    <figcaption>
                    <h2>${e.courseName}</h2>
                    <p>${e.desc}</p>
                    </figcaption>
                    </figure>
            </div>`
    }
if('All' === curentitem){
   return `  <div class="course">
                <figure>
                    <img src="${e.img}" alt="Course Image Of GICS">
                    <figcaption>
                    <h2>${e.courseName}</h2>
                    <p>${e.desc}</p>
                    </figcaption>
                    </figure>
            </div>`
}

}).join("")

    })

})

//  Team section ==>
const teams = [
    {
        name: 'Shivam Kumar',
        designation: 'Web Developer',
        info: 'lorem ipsusm dollder losrem doller here thatweb dev.',
        img: './images/user2.jpg',
        github: 'https://github.com',
        linkedin: 'https://linkedin.com',
        insta: 'https://instagram.com',
        twitter: 'https://twitter.com'
    },
    {
        name: 'Mani Kumar',
        designation: 'Ethical Hacker',
        info: 'lorem ipsusm dollder losrem doller here thatweb dev.',
        img: './images/mani.png',
        github: 'https://github.com',
        linkedin: 'https://linkedin.com',
        insta: 'https://instagram.com',
        twitter: 'https://twitter.com'
    }
];
const teamsContainer = document.querySelector('.teams');
const profile = document.querySelectorAll('.profile')

function displayTeam(){
teamsContainer.innerHTML = teams.map((user)=>{
    return `<div class="profile">
            <figure>
                <img src="${user.img}" alt="Gics mentor image">
                <figcaption>
                    <div class="profilename-designation">
                        <h2>${user.name}</h2>
                        <h3>${user.designation}</h3>
                    </div>
                    <p>${user.info}</p>
                    <div class="user-social">
                        <li><a href="${user.github}"><i class="fa-brands fa-github"></i></a></li>
                        <li><a href="${user.twitter}"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="${user.linkedin}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="${user.insta}"><i class="fa-brands fa-instagram"></i></a></li>
                    </div>
                </figcaption>
            </figure>
        </div>`
}).join('')
}

window.addEventListener('DomContentLoaded',displayTeam())



// Fade Effect ==>

window.addEventListener('scroll',()=>{
    const choiceImage = document.querySelector('.choice-image');
const choiceContent = document.querySelector('.choice-content');
const choiceImagePosition = choiceImage.getBoundingClientRect().top;
const choiceContentPosition = choiceContent.getBoundingClientRect().top;
const screenPosition = window.innerHeight / 1;

    if(choiceImagePosition < screenPosition){
        choiceImage.classList.add('image-active');
        console.log('clas added');
        choiceContent.classList.add('content-active')
    }
    else{
        choiceImage.classList.remove('image-active');
        choiceContent.classList.remove('content-active')
    }

    const everyCourses = document.querySelectorAll('.course');  

    everyCourses.forEach((singleCourse)=>{
       const coursePosition = singleCourse.getBoundingClientRect().top;
       if(coursePosition < screenPosition){
           singleCourse.classList.add('active-course')
       }else{
           singleCourse.classList.remove('active-course');
       }
    })
const userprofiles = document.querySelectorAll('.profile')
    userprofiles.forEach((userProfile)=>{
        const userProfilePosition = userProfile.getBoundingClientRect().top;
        if(userProfilePosition < screenPosition){
            userProfile.classList.add('active-profile');
            console.log('profile class added')
        }
        else{
            userProfile.classList.remove('active-profile');
        }
    })

})
