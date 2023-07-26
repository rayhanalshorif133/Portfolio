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
        'title': 'Simple Text Animation 🕊',
        'image': './assets/images/gif/simple_text_animation.gif',
        'description': {
            'des_title': 'Simple Text Animation',
            'emoji': './assets/images/emojis/peace.gif',
            'conclusion': 'Using Html, CSS and Js',
        },
        'url': './pages/simple_text_animation/index.html',
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
    },
    {
        'title': 'Mouse Curser Changer',
        'image': './assets/images/gif/mouse_curser_changer.gif',
        'description': {
            'des_title': 'Change Curser Pointer',
            'emoji': './assets/images/emojis/grinning.gif',
            'conclusion': 'Using Html, CSS and Js',
        },
        'url': './pages/mouse_curser_changer/index.html',
        'github_url': false
    },
    {
        'title': 'Gamer Zone 🤺',
        'image': './assets/images/gif/working_on_1.gif',
        'description': {
            'des_title': 'Gamer Zone',
            'emoji': './assets/images/emojis/rainbow.gif',
            'conclusion': 'Using Html and Talwindcss',
        },
        'url': './pages/gamer_zone/index.html',
        'github_url': false
    }
];


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


const ProjectItemBox = ({ item }) => {
    const { title, image, description, url } = item;
    const { des_title, emoji, conclusion } = description;
    return (
        <div className="box h-auto w-[25rem] rounded-xl py-5 group/item">
            <div className="mt-2 mx-[2.8rem] transition-all duration-500 ease-in-out">
                <div className="justify-center w-full mx-auto overflow-hidden rounded-lg cursor-pointer h-52">
                    <img src={image} alt={title} className="object-cover w-full h-full transition-transform duration-200 ease-in-out group-hover/item:scale-105" />
                </div>
                <div className="flex justify-between">
                    <h2 className="text-xs font-semibold text-primary py-5 font-poppins tracking-wide text-start">{des_title}</h2>
                    <h2 className="text-xs font-semibold text-white py-5 font-poppins tracking-wide text-start">
                        {emoji ? <img src={emoji} alt="emoji" className="inline-block w-4 h-4 mx-1" /> : " "}
                        <span className="text-white"> {conclusion}</span>
                    </h2>
                </div>
                <div className="my-2 flex">
                    <h2 className="text-white text-2xl fonts-montserrat font-medium text-start">{title}</h2>
                    <div className="invisible group-hover/item:visible text-start m-2">
                        <i className="fa-solid fa-arrow-right-long text-primarySub  transition-all duration-500 ease-in-out text-start fa-lg -rotate-45"></i>
                    </div>
                </div>
            </div>
        </div>
    );
}
const Projects = () => {
    return (
        <div class="flex flex-col items-center justify-center transition-all duration-700 ease-in-out" id="projects">
            <div class="py-10 mx-auto justify-center text-center">
                <h4
                    class="uppercase text-primarySub font-montserrat text-sm tracking-wide font-medium py-1 justify-center text-center">
                    VISIT MY Projects AND KEEP YOUR FEEDBACK</h4>
                <h2
                    class="text-[#c4cfde] text-6xl font-bold font-montserrat tracking-wide py-5 justify-center text-center">
                    Projects</h2>
            </div>
            <div className="grid grid-cols-3 gap-6 h-auto justify-start py-10">
                {
                    showcaseItems.map((item, index) => {
                        return <ProjectItemBox key={index} item={item} />
                    })
                }
            </div>
            <div className="h-[2px] w-[75%] my-10 mt-[5rem] mx-auto bg-[#000000]/40"></div>
        </div>
    );
}

const container = document.getElementById('projects');
const root = ReactDOM.createRoot(container);
root.render(<Projects />)