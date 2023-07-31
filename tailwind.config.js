/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue"],
  theme: {
    extend: {
      boxShadow:{
        button_shadow_down: '4px 4px 0px 0px #18191F'
      }
    },
  },
  plugins: [],
  safelist: [
    "text-red-500",
    "flex-row-reverse"
  ]
}

