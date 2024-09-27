/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',  // Scans all Blade files in your resources directory
    './resources/**/*.js',         // Scans all JS files in your resources directory
    './resources/**/*.vue',        // If you are using Vue.js
    './public/**/*.html',          // Scans static HTML files if you have any
  ],
  theme: {
    extend: {fontFamily: {
      sans: ["Spicy Rice", 'serif'],
      
    },
  },
  },
  plugins: [],
}
