/**
 * Navigation toggle functionality
 */
(function() {
    'use strict';

    const menuToggle = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('.main-navigation');

    if (!menuToggle || !navigation) {
        return;
    }

    menuToggle.addEventListener('click', function() {
        const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
        
        menuToggle.setAttribute('aria-expanded', !isExpanded);
        navigation.classList.toggle('toggled');
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        const isClickInside = navigation.contains(event.target);
        
        if (!isClickInside && navigation.classList.contains('toggled')) {
            menuToggle.setAttribute('aria-expanded', 'false');
            navigation.classList.remove('toggled');
        }
    });

    // Close menu on escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && navigation.classList.contains('toggled')) {
            menuToggle.setAttribute('aria-expanded', 'false');
            navigation.classList.remove('toggled');
            menuToggle.focus();
        }
    });
})();
