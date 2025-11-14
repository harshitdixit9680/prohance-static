// // Auto-scroll testimonials
// document.addEventListener('DOMContentLoaded', function() {
//   const wrapper = document.querySelector('.testimonial-scroll-wrapper');
//   const cards = document.querySelectorAll('.testimonial-card');
//   const dots = document.querySelectorAll('.dot');
//   let currentIndex = 0;

//   // Function to scroll to specific card
//   function scrollToCard(index) {
//     if (cards[index]) {
//       cards[index].scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'start' });
//       updateActiveDot(index);
//       currentIndex = index;
//     }
//   }

//   // Update active dot
//   function updateActiveDot(index) {
//     document.querySelectorAll('.dot').forEach((dot, i) => {
//       if (Math.floor(i / 3) === index) {
//         dot.classList.add('active');
//       } else {
//         dot.classList.remove('active');
//       }
//     });
//   }

//   // Click event for dots
//   dots.forEach((dot, index) => {
//     dot.addEventListener('click', function() {
//       scrollToCard(Math.floor(index / 3));
//     });
//   });

//   // Auto-scroll every 5 seconds
//   setInterval(() => {
//     currentIndex = (currentIndex + 1) % cards.length;
//     scrollToCard(currentIndex);
//   }, 5000);
// });
