module.exports = {
    content: [
        '*.blade.php',
    ],

    theme: {
    
        colors: {
        'primary' : '#94DB93',
        'white':'#FFFDFF',
        'black':'#000A12',
        'secondary':'#69C4A0',
    },
    screens: {
        'tablet': '640px',
        // => @media (min-width: 640px) { ... }

        'laptop': '1024px',
        // => @media (min-width: 1024px) { ... }

        'desktop': '1280px',
        // => @media (min-width: 1280px) { ... }
        },

    },
    plugins: [],
}
