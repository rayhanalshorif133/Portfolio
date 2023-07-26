const { useState, useRef, useEffect } = React;

const UiNavItem = (props) => {

    const {title,icon, active = false} = props;

    const tags= title.toLowerCase().replace(" ", "_");

    return (
    <li className="my-1">
        <a href={`#${tags}`} className={`${active? "text-primary" : "text-[#A6ADBA] hover:text-primary"}`}>
            <i className={`${active? "text-primary" : "text-[#A6ADBA] hover:text-primary"} ${icon} mx-2`}></i>
            <span className={`${active? "text-primary" : "text-[#A6ADBA] hover:text-primary"}`}>{title}</span>
        </a>
    </li>
    );
}

const UiNav = () => {
    return (<ul
        className="menu text-base uppercase font-montserrat font-normal tracking-[1px]">
        <UiNavItem title='Home' icon='fa-solid fa-house' active={true} />
        <UiNavItem title='Features' icon='fa-solid fa-briefcase' />
        <UiNavItem title='Portfolio' icon='fa-solid fa-layer-group' />
        <UiNavItem title='Resume' icon='fa-solid fa-user-group' />
        <UiNavItem title='Projects' icon='fa-solid fa-store' />
        <UiNavItem title='Blog' icon='fa-solid fa-image' />
        <UiNavItem title='Contacts' icon='fa-solid fa-comment' />
    </ul>);
}

const SocialIcon = (props) => {
    const { title, icon } = props;
    return (<div
        className={`box mx-1 px-4 py-[12px] tooltip tooltip-top cursor-pointer transition duration-700 ease-in-out group/item`}
        data-tip={title}>
        <i
            className={`${icon} font-bold shadow-2xl text-[#A6ADBA] group-hover/item:text-${title}`}></i>
    </div>)
}

const SideBar = () => {
    return (<div>
        <header className="pt-[50px] mx-auto text-center">
            <div className="avatar">
                <div
                    className="w-full h-[200px] rounded-full border-[5px] border-[#32363b] shadow-md shadow-[#000000]/40">
                    <img
                        src="https://avatars.githubusercontent.com/u/126382033?s=400&u=7687a3f9f1364708dd1c7f9ee1367a48695a9203&v=4" />
                </div>
            </div>
        </header>
        <div className="pt-5 px-[10px]">
            <UiNav />
            <div
                className="h-[1px] w-[80%] mx-auto text-center bg-[#383A3E]"></div>
            <div className="mt-5 px-[30px]">
                <h2
                    className="uppercase text-[14px] text-[#c4cfde] tracking-[2px] font-poppins font-medium">find
                    with me</h2>
                <div className="flex justify-between my-2 mx-0 xl:mx-0">
                    <SocialIcon icon='fa-brands fa-facebook-f' title='facebook' />
                    <SocialIcon icon='fa-brands fa-twitter' title='twitter' />
                    <SocialIcon icon='fa-solid fa-envelope' title='email' />
                </div>
            </div>
        </div>
    </div>);
}

const container = document.getElementById('sideBar');
const root = ReactDOM.createRoot(container);
root.render(<SideBar />)