import withMT from "@material-tailwind/html/utils/withMT";
/** @type {import('tailwindcss').Config} */
export default withMT ( {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
      extend: {
        colors: {
          'primary' : '#113e67',
          'sec' : '#ca9263'
        }
      },
  },
  plugins: [],
});