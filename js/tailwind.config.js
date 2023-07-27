tailwind.config = {
    theme: {
        screens: {
            'sm':'320px',
            'md': '375px',
            'ml': '425px',
            'lg': '768px',
            'xl': '1024px',
            '2xl': '1440px',
            '3xl': '1640px',
        },
        fontFamily: {
            'montserrat': ['Montserrat', 'sans-serif'],
            'poppins': ['Poppins', 'sans-serif'],
        },
        extend: {
             colors: {
                 primary: '#ff014f',
                 primarySub: '#f9004d',
                 facebook: '#1877F2',
                 twitter: '#1da1f2',
                 email: '#EA4335',
             }
        }
    }
}