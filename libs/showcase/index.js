const showcaseItems = [
    {
        'title': 'Bolt Food 🥣',
        'image': './assets/images/gif/bolt_food.gif',
        'description': {
            'des_title': 'Bolt Food',
            'emoji': './assets/images/emojis/tomato.gif',
            'conclusion': 'Using Html and CSS',
        },
        'url': './pages/bolt_food/index.html',
        'github_url': false
    },
    {
        'title': 'Gozayaan Clone 🚀',
        'image': './assets/images/gif/gozayaan_clone.gif',
        'description': {
            'des_title': 'Gozayaan Clone',
            'emoji': './assets/images/emojis/thumbs_up.gif',
            'conclusion': 'Using HTML, CSS, Jquery',
        },
        'url': 'https://rayhanalshorif133.github.io/Gozayaan-Clone',
        'github_url': 'https://github.com/rayhanalshorif133/Gozayaan-Clone'
    },
    {
        'title': 'Twitter Text Animation 🕊',
        'image': './assets/images/gif/twitter_text_animation.gif',
        'description': {
            'des_title': 'Text Animation Twitter',
            'emoji': './assets/images/emojis/peace.gif',
            'conclusion': 'Using Html and CSS',
        },
        'url': './pages/twitter_text_animation/index.html',
        'github_url': false
    },
    {
        'title': 'Lambda Clone 🤗',
        'image': './assets/images/gif/lambda_clone.gif',
        'description': {
            'des_title': 'Clone of Lambda Website',
            'emoji': './assets/images/emojis/hug_face.gif',
            'conclusion': 'Using Html and CSS',
        },
        'url': 'https://rayhanalshorif133.github.io/Lambda-Website-Clone/',
        'github_url': 'https://github.com/rayhanalshorif133/Lambda-Website-Clone'
    }];


const animations = ['animate__bounceIn', 'animate__fadeInLeft', 'animate__fadeInDown', 'animate__fadeInDownBig', 'animate__flip', 'animate__lightSpeedInRight', 'animate__rotateIn'];

const animations_delays = ['animate__delay-2s', 'animate__delay-1s']


function Index() {

    // re-arrange the showcase items
    showcaseItems.sort(() => Math.random() - 0.5);
    return (<div
        className="grid grid-flow-row grid-cols-1 gap-0 mx-5 lg:grid-cols-2 xl:grid-cols-3 lg:gap-3 xl:gap-6 lg:mx-2 2xl:mx-0">
        {
            showcaseItems.map((item, index) => {
                return <Showcase key={index} item={item} />
            })
        }
    </div>);
}

function Showcase({ item }) {

    const { title, image, description, url } = item;
    const { des_title, emoji, conclusion } = description;
    const animation = animations[Math.floor(Math.random() * animations.length)];
    const animationsDelay = animations_delays[Math.floor(Math.random() * animations_delays.length)];

    return (
        <div className={`flex flex-col items-center justify-center my-5 cursor-pointer lg:my-0 animate__animated ${animation} ${animationsDelay}`}>
            <a href={url} target="_blank" className="w-11/12 h-auto rounded-lg bg-[#212C40]">
                <div className="justify-center w-10/12 mx-auto mt-6 overflow-hidden rounded-lg cursor-pointer h-52 group">
                    <img src={image} alt={title} className="object-cover w-full h-full transition-transform duration-200 ease-in-out group-hover:scale-105" />
                </div>
                <div className="mx-6">
                    <h2 className="text-white text-[14px] font-semibold text-start pt-4 pb-2">{title}</h2>
                    <h3 className="text-[#79879C] text-[14px] font-semibold pb-2">
                        {des_title}
                        {emoji ? <img src={emoji} alt="emoji" className="inline-block w-4 h-4 mx-1" /> : " "}
                        {conclusion}
                    </h3>
                </div>
            </a>
        </div>
    )
}







const container = document.getElementById('collectionOfShowcase');
const root = ReactDOM.createRoot(container);
root.render(<Index />)