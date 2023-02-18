
window.addEventListener('load', function () {

      // console.log("local storage: ", localStorage.theme);
      let darkModeToggle = this.document.querySelector('#darkModeToggle');

      if (localStorage.theme === 'dark' ) {
		document.documentElement.classList.add('dark');
            darkModeToggle.classList.add('is-style-dark');
      }

      darkModeToggle.addEventListener('click', function(e) {
            e.preventDefault();

            // Toggle Dark Mode
            if ( localStorage.theme === 'dark' ) {
                  localStorage.theme = 'light'
                  document.documentElement.classList.remove('dark')
                  darkModeToggle.classList.remove('is-style-dark');
            } else {
                  localStorage.theme = 'dark'
                  document.documentElement.classList.add('dark')
                  darkModeToggle.classList.add('is-style-dark');
            }
      });


      let clearPrefsToggle = this.document.querySelector('#clearThemePrefs');

      // nav toggle
      let main_navigation = document.querySelector('#primary-menu');
      document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
      });

});


