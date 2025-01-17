class ItcAccordion {
  constructor(target, config) {
    this._el = typeof target === 'string' ? document.querySelector(target) : target;
    const defaultConfig = {
      alwaysOpen: true,
      duration: 350
    };
    this._config = Object.assign(defaultConfig, config);
    this.addEventListener();
  }
  addEventListener() {
    this._el.addEventListener('click', (e) => {
      const elHeader = e.target.closest('.accordion__header');
      if (!elHeader) {
        return;
      }
      if (!this._config.alwaysOpen) {
        const elOpenItem = this._el.querySelector('.accordion__item_show');
        if (elOpenItem) {
          elOpenItem !== elHeader.parentElement ? this.toggle(elOpenItem) : null;
        }
      }
      this.toggle(elHeader.parentElement);
    });
  }
  show(el) {
    const elBody = el.querySelector('.accordion__body');
    if (elBody.classList.contains('collapsing') || el.classList.contains('accordion__item_show')) {
      return;
    }
    elBody.style['display'] = 'block';
    const height = elBody.offsetHeight;
    elBody.style['height'] = 0;
    elBody.style['overflow'] = 'hidden';
    elBody.style['transition'] = `height ${this._config.duration}ms ease`;
    elBody.classList.add('collapsing');
    el.classList.add('accordion__item_slidedown');
    elBody.offsetHeight;
    elBody.style['height'] = `${height}px`;
    window.setTimeout(() => {
      elBody.classList.remove('collapsing');
      el.classList.remove('accordion__item_slidedown');
      elBody.classList.add('collapse');
      el.classList.add('accordion__item_show');
      elBody.style['display'] = '';
      elBody.style['height'] = '';
      elBody.style['transition'] = '';
      elBody.style['overflow'] = '';
    }, this._config.duration);
  }
  hide(el) {
    const elBody = el.querySelector('.accordion__body');
    if (elBody.classList.contains('collapsing') || !el.classList.contains('accordion__item_show')) {
      return;
    }
    elBody.style['height'] = `${elBody.offsetHeight}px`;
    elBody.offsetHeight;
    elBody.style['display'] = 'block';
    elBody.style['height'] = 0;
    elBody.style['overflow'] = 'hidden';
    elBody.style['transition'] = `height ${this._config.duration}ms ease`;
    elBody.classList.remove('collapse');
    el.classList.remove('accordion__item_show');
    elBody.classList.add('collapsing');
    window.setTimeout(() => {
      elBody.classList.remove('collapsing');
      elBody.classList.add('collapse');
      elBody.style['display'] = '';
      elBody.style['height'] = '';
      elBody.style['transition'] = '';
      elBody.style['overflow'] = '';
    }, this._config.duration);
  }
  toggle(el) {
    el.classList.contains('accordion__item_show') ? this.hide(el) : this.show(el);
  }
}

if ($('.accordion').length) {
  new ItcAccordion(document.querySelector('.accordion'), {
    alwaysOpen: true
  });
}

var swiper = new Swiper(".swiper", {
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
    renderFraction: function (currentClass, totalClass) {
      return '<span>0<span class="' + currentClass + '"></span></span>' +
        '<span>0<span class="' + totalClass + '"></span></span>';
    },
  },
  // autoplay: {
  //   delay: 5000,
  // },
  loop: true,
  scrollbar: {
    el: '.swiper-scrollbar',
    // Makes the Scrollbar Draggable
    draggable: true,
    // Snaps slider position to slides when you release Scrollbar
    snapOnRelease: true,
    // Size (Length) of Scrollbar Draggable Element in px
    // dragSize: 100
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
swiper.on('slideChange', function () {
  var progress_width_item = 100 / swiper.slides.length;
  var progress_width = (swiper.realIndex + 1) * progress_width_item;

  $('.swiper__progress').css('height', progress_width);
});


function send_ajax() {
  if ($('#operand1').val() && $('#operand2').val()) {
    var operand1 = $('#operand1').val();
    var operand2 = $('#operand2').val();
    var method = $('#method').val();
    $.ajax({
      url: window.wp_data.ajax_url,
      type: 'POST',
      data: 'action=calculator&method=' + method + '&operand1=' + operand1 + '&operand2=' + operand2,
      beforeSend: function (xhr) {
        console.log(xhr, 'err');
      },
      success: function (data) {
        $('#result').text(data);
      }
    });
  }
}


$(function () {
  $(document).on("change keyup input click", "#operand1, #operand2", function () {
    if (this.value.match(/[^0-9]/g)) {
      this.value = this.value.replace(/[^0-9]/g, "");
    };
  });

  $(document).on('change', '#method', function (e) {
    send_ajax();
  })
  $(document).on('keyup', '#operand1, #operand2', function (e) {
    send_ajax();
  });
});


