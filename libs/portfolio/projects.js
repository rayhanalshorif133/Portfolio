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
        <a href={url} target="_blank" className="w-full h-auto py-5 box rounded-xl group/item">
            <div className="mt-2 mx-[2.8rem] transition-all duration-500 ease-in-out">
                <div className="justify-center w-full mx-auto overflow-hidden rounded-lg cursor-pointer h-52">
                    <img src={image} alt={title} className="object-cover w-full h-full transition-transform duration-200 ease-in-out group-hover/item:scale-105" />
                </div>
                <div className="flex justify-between">
                    <h2 className="py-2 text-xs font-semibold tracking-wide text-primary font-poppins text-start">{des_title}</h2>
                    <h2 className="py-2 text-xs font-semibold tracking-wide text-white font-poppins text-start">
                        {emoji ? <img src={emoji} alt="emoji" className="inline-block w-4 h-4 mx-1" /> : " "}
                        <span className="text-white"> {conclusion}</span>
                    </h2>
                </div>
                <div className="flex my-2">
                    <h2 className="text-2xl font-medium text-white fonts-montserrat text-start">{title}</h2>
                    <div className="invisible m-2 group-hover/item:visible text-start">
                        <i className="transition-all duration-500 ease-in-out -rotate-45 fa-solid fa-arrow-right-long text-primarySub text-start fa-lg"></i>
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
                <TitleAndSlug title='Projects' slug={'VISIT MY Projects AND KEEP YOUR FEEDBACK'}/>
            </div>
            <div className="grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-6 h-auto py-10 w-full px-[2rem] px-[2rem] lg:px-[5rem] xl:px-[4.3rem]  xl:py-5 2xl:px-32 3xl:px-[11.5rem]">
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