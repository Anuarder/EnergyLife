$(document).ready(function () {
  new WOW().init();
  initVue();
  headerSlider();
  resultCounter();
  reviewsSlider();
  sidebar();
  franchiseSlider();
  anchor();
  dialog1();
  flexibleSlider();
})

function flexibleSlider() {
  const headerSwiper = new Swiper('.flexible-slider', {
    loop: true,
    autoplay: {
      delay: 3000
    }
  })
}

function headerSlider() {
  const headerSwiper = new Swiper('.header__slider', {
    loop: true,
    navigation: {
      nextEl: '.header__slider-right',
      prevEl: '.header__slider-left',
    },
    autoplay: {
      delay: 3000
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  })
}

function resultCounter() {
  var a = 0;
  $(window).scroll(function () {

    var oTop = $('.result-counter').offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
      $('.count').each(function () {
        $(this).prop('Counter', 0).animate({
          Counter: $(this).text()
        }, {
          duration: 2000,
          easing: 'swing',
          step: function (now) {
            $(this).text(Math.ceil(now));
          }
        });
      });
      a = 1;
    }

  });
}

function reviewsSlider() {
  let slidesCount = {
    slides: 3,
    spaceBetween: 10
  }

  if (window.innerWidth < 900 && !(window.innerWidth < 550)) {
    console.log('tab')
    slidesCount = {
      slides: 2,
      spaceBetween: 10
    }
  } else if (window.innerWidth < 550) {
    console.log('mob')
    slidesCount = {
      slides: 1,
      spaceBetween: 0
    }
  }
  const reviewsSwiper = new Swiper('.ems-reviews__slider', {
    loop: true,
    slidesPerView: slidesCount.slides,
    spaceBetween: slidesCount.spaceBetween,
    navigation: {
      nextEl: '.reviews__slider-right',
      prevEl: '.reviews__slider-left',
    },
    autoplay: {
      delay: 3000
    },
    pagination: {
      el: '.swiper-pagination2',
      clickable: true,
    },
  })
}

function reviewText(val) {
  $(`.review-text-${val}`).css('display', 'block');
}

function closeReviewText(val) {
  $(`.review-text-${val}`).css('display', 'none');
}

function franchiseSlider() {
  const franchiseSwiper = new Swiper('.ems-franchise__slider', {
    loop: true,
    navigation: {
      nextEl: '.ems-franchise__right',
      prevEl: '.ems-franchise__left',
    },
    autoplay: {
      delay: 3000
    },
    pagination: {
      el: '.swiper-pagination3',
      clickable: true,
    },
  })
}

function dialogClose() {
  const dialog = document.getElementsByClassName("dialog")
  for (let item of dialog) {
    item.style.display = 'none'
  }
}

function dialog1() {
  const typesDialog = document.getElementsByClassName("dialog")[0];
  const typesClose = document.getElementsByClassName("dialog-close")[0];
  const typesButton = document.getElementsByClassName("types-button");

  const foodDialog = document.getElementsByClassName("dialog")[1];
  const foodBtn1 = document.getElementsByClassName("food-btn")[0];
  const foodBtn2 = document.getElementsByClassName("food-btn")[1];
  const foodClose = document.getElementsByClassName("dialog-close")[1];

  const franchiseDialog = document.getElementsByClassName("dialog")[2];
  const franchiseBtn1 = document.getElementsByClassName("franchise-btn")[0];
  const franchiseClose = document.getElementsByClassName("dialog-close")[2];


  for (let el of typesButton) {
    el.onclick = function () {
      typesDialog.style.display = "block";
    }
  }

  typesClose.onclick = function () {
    typesDialog.style.display = "none";
  }

  franchiseBtn1.onclick = function () {
    franchiseDialog.style.display = "block";
  }
  franchiseClose.onclick = function () {
    franchiseDialog.style.display = "none";
  }

  foodBtn1.onclick = function () {
    foodDialog.style.display = "block";
  }
  foodBtn2.onclick = function () {
    foodDialog.style.display = "block";
  }
  foodClose.onclick = function () {
    foodDialog.style.display = "none";
  }

  window.onclick = function (event) {
    if (event.target == franchiseDialog) {
      franchiseDialog.style.display = "none";
    }
    if (event.target == foodDialog) {
      foodDialog.style.display = "none";
    }
    if (event.target == typesDialog) {
      typesDialog.style.display = "none";
    }
  }
}

function sidebar() {
  const sidebar = document.getElementsByClassName("sidebar")[0];
  const sidebarBtn = document.getElementsByClassName("navigation__sidebar-btn")[0];
  const sidebarClose = document.getElementsByClassName("sidebar-close")[0];
  const sidebarLinks = document.getElementsByClassName("sidebar-link");
  sidebarBtn.onclick = function () {
    sidebar.style.display = "flex";
  }
  sidebarClose.onclick = function () {
    sidebar.style.display = "none";
  }
  for (let item of sidebarLinks) {
    item.onclick = function () {
      sidebar.style.display = "none";
    }
  }
}

function initVue() {
  // Ссылка на api 
  const apiLink = "https://elapi.tella.kz/sendMessage"
  Vue.directive('mask', VueMask.VueMaskDirective);

  const vm = new Vue({
    el: '#app',
    data: {
      girl_button: 1,
      franchiseLoading: false,
      foodLoading: false,
      foodName: '',
      foodPhone: '',
      franchiseName: '',
      franchisePhone: '',
      requestLoading: false,
      requestName: '',
      requestEmail: '',
      requestPhone: '',
      typesLoading: false,
      typesName: '',
      typesPhone: ''
    },
    methods: {
      showGirlText(value) {
        this.girl_button = value === this.girl_button ? 0 : value
      },
      tweenShapes(e) {
        let x = e.pageX * 0.08;
        let y = e.pageY * 0.08;
        for (let i = 1; i <= 5; i++) {
          TweenMax.to(document.getElementById(`shape${i}`), 1, {
            x: (x - 0.5),
            y: (y - 0.2)
          });
        }
      },
      sendFoodRequest() {
        this.foodLoading = true;
        axios.post(apiLink, {
          to: 'info.pitanie2.0@gmail.com',
          subject: 'Консультация по питанию',
          name: this.foodName,
          email: '',
          phone: this.foodPhone
        }).then(res => {
          dialogClose()
          swal("Успешно!", "Заявка отправлена", "success");
        }).catch(err => {
          alert("Ошибка")
        }).finally(() => {
          this.foodLoading = false
        })
      },
      sendFranchiseRequest() {
        this.franchiseLoading = true;
        axios.post(apiLink, {
          to: 'ar@arex.kz',
          subject: 'Консультация по франшизе',
          name: this.franchiseName,
          email: '',
          phone: this.franchisePhone
        }).then(res => {
          dialogClose()
          swal("Успешно!", "Заявка отправлена", "success");
        }).catch(err => {
          alert("Ошибка")
        }).finally(() => {
          this.franchiseLoading = false
        })
      },
      sendRequest() {
        this.requestLoading = true;
        axios.post(apiLink, {
          to: 'energy.life.forever@gmail.com',
          subject: 'Заявка на звонок',
          name: this.requestName,
          email: this.requestEmail,
          phone: this.requestPhone
        }).then(res => {
          dialogClose()
          swal("Успешно!", "Заявка отправлена", "success");
        }).catch(err => {
          alert("Ошибка")
        }).finally(() => {
          this.requestLoading = false
        })
      },
      sendTypesRequest() {
        this.typesLoading = true;
        axios.post(apiLink, {
          to: 'energy.life.forever@gmail.com',
          subject: 'Заявка на звонок',
          name: this.typesName,
          email: this.typesEmail,
          phone: this.typesPhone
        }).then(res => {
          dialogClose()
          swal("Успешно!", "Заявка отправлена", "success");
        }).catch(err => {
          alert("Ошибка")
        }).finally(() => {
          this.typesLoading = false
        })
      },
    }
  });
}

function anchor() {
  $('.anchor').bind('click', function (e) {
    e.preventDefault();
    let target = $(this).attr("href");
    let top = $(target).offset().top - 150;
    $('html, body').animate({
      scrollTop: top,
    }, 800);
    return false;
  });
}