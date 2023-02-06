/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
        colors : {
            primary : '#D1B381',
            border_primary: '#35312e',
        },
        fontFamily : {
            Candara : 'Candara',
            Encode_Sans_SC : ['Encode Sans SC', 'sans-serif'],
            Merriweather_Sans: ['Merriweather Sans', 'sans-serif']
        },
        keyframes : {
            music_icon_movement : {
                '0%' : {transform : 'translateY(0rem)'},
                '50%' : {transform : 'translateY(2rem)'},
                '100%' : {transform : 'translateY(0rem)'}
            }
        },
        animation : {
            'music_icon_movement' : 'music_icon_movement 6s linear infinite',
        },
    },
  },
  plugins: [],
}
