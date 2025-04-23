// Insert this at the beginning of the file
(function() {
    // Force sidebar to always be in expanded state
    document.addEventListener('DOMContentLoaded', function() {
        // Force menu size attribute
        document.documentElement.setAttribute('data-menu-size', 'default');
        
        // Override any attempts to change menu size
        Object.defineProperty(document.documentElement.dataset, 'menuSize', {
            get: function() { return 'default'; },
            set: function() { return 'default'; },
            configurable: false,
        });
        
        // Remove toggle buttons
        setTimeout(function() {
            document.querySelectorAll('.button-toggle-menu, .button-sm-hover').forEach(function(el) {
                if(el) el.remove();
            });
        }, 100);
    });
})();

/**
* Theme: Larkon - Responsive Bootstrap 5 Admin Dashboard
* Author: Techzaa
* Module/App: Theme Layout Customizer Js
*/

class ThemeLayout {

     constructor() {
          this.html = document.getElementsByTagName('html')[0]
          this.config = window.config;
          // Force the config to have default menu size
          if (this.config && this.config.menu) {
               this.config.menu.size = 'default';
          }
     }

     // Main Nav
     initVerticalMenu() {
          const navCollapse = document.querySelectorAll('.navbar-nav li .collapse');
          const navToggle = document.querySelectorAll(".navbar-nav li [data-bs-toggle='collapse']");

          navToggle.forEach(toggle => {
               toggle.addEventListener('click', function (e) {
                    e.preventDefault();
               });
          });

          // open one menu at a time only (Auto Close Menu)
          navCollapse.forEach(collapse => {
               collapse.addEventListener('show.bs.collapse', function (event) {
                    const parent = event.target.closest('.collapse.show');
                    document.querySelectorAll('.navbar-nav .collapse.show').forEach(element => {
                         if (element !== event.target && element !== parent) {
                              const collapseInstance = new bootstrap.Collapse(element);
                              collapseInstance.hide();
                         }
                    });
               });
          });

          if (document.querySelector(".navbar-nav")) {
               // Activate the menu in left side bar based on url
               document.querySelectorAll(".navbar-nav a").forEach(function (link) {
                    var pageUrl = window.location.href.split(/[?#]/)[0];

                    if (link.href === pageUrl) {
                         link.classList.add("active");
                         link.parentNode.classList.add("active");

                         let parentCollapseDiv = link.closest(".collapse");
                         while (parentCollapseDiv) {
                              parentCollapseDiv.classList.add("show");
                              parentCollapseDiv.parentElement.children[0].classList.add("active");
                              parentCollapseDiv.parentElement.children[0].setAttribute("aria-expanded", "true");
                              parentCollapseDiv = parentCollapseDiv.parentElement.closest(".collapse");
                         }
                    }
               });

               setTimeout(function () {
                    var activatedItem = document.querySelector('li a.active');

                    if (activatedItem != null) {
                         var simplebarContent = document.querySelector('.main-nav .simplebar-content-wrapper');
                         var offset = activatedItem.offsetTop - 300;
                         if (simplebarContent && offset > 100) {
                              scrollTo(simplebarContent, offset, 600);
                         }
                    }
               }, 200);

               // scrollTo (Left Side Bar Active Menu)
               function easeInOutQuad(t, b, c, d) {
                    t /= d / 2;
                    if (t < 1) return c / 2 * t * t + b;
                    t--;
                    return -c / 2 * (t * (t - 2) - 1) + b;
               }

               function scrollTo(element, to, duration) {
                    var start = element.scrollTop, change = to - start, currentTime = 0, increment = 20;
                    var animateScroll = function () {
                         currentTime += increment;
                         var val = easeInOutQuad(currentTime, start, change, duration);
                         element.scrollTop = val;
                         if (currentTime < duration) {
                              setTimeout(animateScroll, increment);
                         }
                    };
                    animateScroll();
               }
          }
     }

     initConfig() {
          this.config = JSON.parse(JSON.stringify(window.config));
          // Force menu size to 'default' to keep sidebar expanded
          this.config.menu.size = 'default';
          this.setSwitchFromConfig();
     }

     changeMenuColor(color) {
          this.config.menu.color = color;
          this.html.setAttribute('data-menu-color', color);
          this.setSwitchFromConfig();
     }

     changeMenuSize(size, save = true) {
          // Always keep menu size as 'default' to ensure expanded sidebar
          size = 'default';
          this.html.setAttribute('data-menu-size', size);
          if (save) {
               this.config.menu.size = size;
               this.setSwitchFromConfig();
          }
     }

     changeThemeMode(color) {
          this.config.theme = color;
          this.html.setAttribute('data-bs-theme', color);
          this.setSwitchFromConfig();
     }

     changeTopbarColor(color) {
          this.config.topbar.color = color;
          this.html.setAttribute('data-topbar-color', color);
          this.setSwitchFromConfig();
     }

     resetTheme() {
          this.config = JSON.parse(JSON.stringify(window.defaultConfig));
          // Force menu size to 'default' even after reset
          this.config.menu.size = 'default';
          this.changeMenuColor(this.config.menu.color);
          this.changeMenuSize('default');
          this.changeThemeMode(this.config.theme);
          this.changeTopbarColor(this.config.topbar.color);
     }

     initSwitchListener() {
          var self = this;
          document.querySelectorAll('input[name=data-menu-color]').forEach(function (element) {
               element.addEventListener('change', function (e) {
                    self.changeMenuColor(element.value);
               })
          });

          document.querySelectorAll('input[name=data-menu-size]').forEach(function (element) {
               // Disable menu size radio buttons
               element.disabled = true;
               if (element.value === 'default') {
                    element.checked = true;
               }
          });

          document.querySelectorAll('input[name=data-bs-theme]').forEach(function (element) {
               element.addEventListener('change', function (e) {
                    self.changeThemeMode(element.value);
               })
          });

          document.querySelectorAll('input[name=data-topbar-color]').forEach(function (element) {
               element.addEventListener('change', function (e) {
                    self.changeTopbarColor(element.value);
               })
          });

          //TopBar Light Dark
          var themeColorToggle = document.getElementById('light-dark-mode');
          if (themeColorToggle) {
               themeColorToggle.addEventListener('click', function (e) {
                    if (self.config.theme === 'light') {
                         self.changeThemeMode('dark');
                    } else {
                         self.changeThemeMode('light');
                    }
               });
          }

          var resetBtn = document.querySelector('#reset-layout')
          if (resetBtn) {
               resetBtn.addEventListener('click', function (e) {
                    self.resetTheme();
               });
          }

          // Remove toggle button completely
          var menuToggleBtn = document.querySelector('.button-toggle-menu');
          if (menuToggleBtn) {
               menuToggleBtn.remove();
          }
          
          // Remove hover buttons
          document.querySelectorAll('.button-sm-hover').forEach(function(el) {
               if (el) el.remove();
          });
     }

     showBackdrop() {
          const backdrop = document.createElement('div');
          backdrop.classList = 'offcanvas-backdrop fade show';
          document.body.appendChild(backdrop);
          document.body.style.overflow = "hidden";
          if (window.innerWidth > 1040) {
               document.body.style.paddingRight = "15px";
          }
          const self = this
          backdrop.addEventListener('click', function (e) {
               self.html.classList.remove('sidebar-enable');
               document.body.removeChild(backdrop);
               document.body.style.overflow = null;
               document.body.style.paddingRight = null;
          })
     }

     initWindowSize() {
          var self = this;
          window.addEventListener('resize', function (e) {
               self._adjustLayout();
          })
     }

     _adjustLayout() {
          var self = this;

          if (window.innerWidth <= 1140) {
               // For mobile, don't change menu size, just hide it off-screen
               self.html.classList.remove('sidebar-enable');
          } else {
               // For desktop, ensure menu is always default size
               self.changeMenuSize('default');
          }
     }

     setSwitchFromConfig() {
          sessionStorage.setItem('__LARKON_CONFIG__', JSON.stringify(this.config));

          document.querySelectorAll('.settings-bar input[type=radio]').forEach(function (checkbox) {
               checkbox.checked = false;
          })

          var config = this.config;
          if (config) {
               var layoutColorSwitch = document.querySelector('input[type=radio][name=data-bs-theme][value=' + config.theme + ']');
               var topbarColorSwitch = document.querySelector('input[type=radio][name=data-topbar-color][value=' + config.topbar.color + ']');
               var leftbarSizeSwitch = document.querySelector('input[type=radio][name=data-menu-size][value=' + config.menu.size + ']');
               var leftbarColorSwitch = document.querySelector('input[type=radio][name=data-menu-color][value=' + config.menu.color + ']');

               if (layoutColorSwitch) layoutColorSwitch.checked = true;
               if (topbarColorSwitch) topbarColorSwitch.checked = true;
               if (leftbarSizeSwitch) leftbarSizeSwitch.checked = true;
               if (leftbarColorSwitch) leftbarColorSwitch.checked = true;
          }
     }

     init() {
          this.initVerticalMenu();
          this.initConfig();
          this.initSwitchListener();
          this.initWindowSize();
          this._adjustLayout();
          this.setSwitchFromConfig();
          
          // Final check to ensure sidebar is in expanded state
          setTimeout(() => {
               this.html.setAttribute('data-menu-size', 'default');
          }, 500);
     }
}

// Wrap the initialization in a window.onload event to ensure all CSS is loaded
window.addEventListener('load', function() {
    // Minor delay to ensure CSS is fully applied
    setTimeout(function() {
        new ThemeLayout().init();
    }, 100);
});

// Comment out the immediate initialization
// new ThemeLayout().init();