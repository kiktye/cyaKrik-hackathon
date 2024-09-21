/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "dark-krik": "#191919",
                font: "#ffffff",
                shadowed: "rgb(222, 222, 222)",
                border: "rgba(255, 255, 255, 0.04)",
                tomato: "#fb5e3c",
                orange: "#f8ac2e",
                why: "#b8afda",
            },
            backgroundImage: {
                heroSection:
                    "url(resources/CyaKrik-Resources/Homepage/herosection.jpg)",
            },
            fontFamily: {
                mulish: ["Mulish", "sans-serif"],
                montserrat: ["Montserrat", "sans-serif"],
            },
            boxShadow: {
                "3xl": "rgba(0, 0, 0, 0.13) 0px 0px 51px 51px;",
                hover: "rgba(0, 0, 0, 0.1) 0px 5px 15px 5px;",
                card: "rgba(0, 0, 0, 0.15) 0px 20px 40px 20px;",
            },
            fontSize: {
                "2xs": ".655rem",
            },
            borderRadius: {
                lg2: "3.3rem",
            },
            dropShadow: {
                custom: "5px 5px 60px rgba(0, 0, 0, 1);",
            },
        },
    },
    plugins: [],
    variants: {
        extend: {
            backgroundColor: ["hover"],
        },
    },
};
