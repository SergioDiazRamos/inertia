import gsap from 'gsap';

export const beforeFadeY = (el) => {
  el.style.transform = 'translateY(-60px)';
  el.style.opacity = 0;
};

export const enterFadeY = (el, done) => {
  gsap.to(el, {
    duration: 1,
    y: 0,
    opacity: 1,
    ease: 'ease',
    onComplete: done,
  });
};
