export const scrollLock = () => {
  const body = document.querySelector('html');
  const scrollY = document.documentElement.style.getPropertyValue('--scroll-y');
  body.style.position = 'fixed';
  body.style.width = '100%';
  body.style.height = '100%';
  body.style.overflow = 'hidden';
  body.style.top = `-${scrollY}`;
};

export const scrollAble = () => {
  const body = document.querySelector('html');
  const scrollY = body.style.top;
  body.style.position = '';
  body.style.top = '';
  body.style.height = '';
  body.style.overflow = '';
  window.scrollTo(0, parseInt(scrollY || '0') * -1);
}

window.addEventListener('scroll', () => {
  document.documentElement.style.setProperty('--scroll-y', `${window.scrollY}px`);
});