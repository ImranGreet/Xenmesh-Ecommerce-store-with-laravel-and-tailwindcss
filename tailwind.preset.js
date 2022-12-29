module.exports = {
    theme: {
        extend: {
            keyframes: {
                wiggle: {
                    '0%, ': { transform: 'translateX(1.5px)' },
                    '25%': { transform: ' scaleY(.95)' },
                    '50%': { transform: 'scaleX(.75)' },
                    '75%': { transform: 'translateX(.50)' },
                    '100%': { transform: 'skewX(0.2)' },
                },
            },
            animation: {
                wiggle: 'wiggle 2s ease-in-out 1.5s',
            },
            fontFamily:{
                'work':['Work Sans', 'sans-serif']
            }

        },

    },
};
