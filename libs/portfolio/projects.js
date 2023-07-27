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


const ProjectItemBox = ({ item }) => {
    const { title, image, description, url } = item;
    const { des_title, emoji, conclusion } = description;
    return (
        <a href={url} target="_blank" className="box h-auto w-[25rem] rounded-xl py-5 group/item">
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
        </a>
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
            <div className="grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-6 h-auto py-10 xl:py-5 px-[2rem] lg:px-[5rem] xl:px-[4.3rem] 2xl:px-32 3xl:px-[11.5rem]">
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