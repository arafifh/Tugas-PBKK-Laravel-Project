/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/views/main/public.blade.php',
    './resources/views/main/redesign/index.blade.php',
    './resources/views/admin/layoutmicrosite.blade.php',
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'antasena-purple': '#42009F',
        'antasena-purple-bright' : '#6A00FF',
        'custom-purple': '#631ACB',
        'custom-orange': '#FD803D',
        'custom-blue': '#1E2B42',
      },
      fontFamily:{
        'Gilroy': ["Gilroy"],
        'neue': ['NeueMachina'],
        'neueultra' : ['NeueMachina-Ultra'],
        'plusjakarta' : ['PlusJakarta'],
        'neue' :['NeueMachina'],
        'poppins' :['Poppins'],
        'inter' :['Inter'],
      },
      screens:{
        'll': '1065px',
        'mg': '795px',
        'xs': '425px',
      },
    },
    aspectRatio: {
      '4/3': '4 / 3',
    },
  },
  plugins: [],
}