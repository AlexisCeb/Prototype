module.exports = {
    content: ["./resources/views/*.{html,js,php}","./resources/views/*/*.{html,js,php}"],
    theme: {
        extend: {
            colors: {
                avocado: '#9AE66E'
            },
            fontFamily: {
                'Oswald':['Oswald'],
                'BebasNeue':['Bebas Neue']
            },
            minHeight: {
                '0': '0',
                '1/4': '25%',
                '1/2': '50%',
                '3/4': '75%',
                'full': '100%',
            }
        },
    },
  plugins: [],
}
