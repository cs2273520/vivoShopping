"use strict";var swiper=new Swiper(".swiper-container",{pagination:{el:".swiper-pagination",clickable:!0},effect:"fade",loop:!0,autoplay:{delay:3e3}}),time1=document.getElementById("time"),date1=new Date("2021-02-27 10:17:50"),date2=new Date,d=timeDifference(date1,date2),timer=setInterval(function(){date2=new Date,d=timeDifference(date1,date2),time1.innerHTML="\n <i>距离结束</i>\n        <b>"+d.hours+"</b>\n        <i>时</i>\n        <b>"+d.min+"</b>\n        <i>分</i>\n        <b>"+d.sec+"</b>\n        <i>秒</i>\n        ",0==d.day&&0==d.hours&&0==d.min&&0==d.sec&&clearInterval(timer)},1e3);function timeDifference(e,t,n){var i=e.getTime(),r=t.getTime(),e=Math.abs(i-r),t=parseInt(e/1e3/60/60/24),i=e-24*t*60*60*1e3,r=parseInt(i/1e3/60/60),e=i-60*r*60*1e3,i=parseInt(e/1e3/60),e=e-60*i*1e3;return{day:t,hours:r,min:i,sec:Math.round(e/1e3)}}var right=document.querySelector("#right-top"),btn=document.getElementById("btn");window.onscroll=function(){500<=scrollY?right.style.display="flex":right.style.display="none"},right.onclick=function(){scrollTo({top:0,behavior:"smooth"})};