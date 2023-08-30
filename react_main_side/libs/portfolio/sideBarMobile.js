const { useState, useRef, useEffect } = React;

const UiNavItem = (props) => {

    const { title, icon, active = false } = props;

    const tags = title.toLowerCase().replace(" ", "_");

    return (
        <li className="my-1">
            <a href={`#${tags}`} className={`${active ? "text-primary" : "text-[#A6ADBA] hover:text-primary"}`}>
                <i className={`${active ? "text-primary" : "text-[#A6ADBA] hover:text-primary"} ${icon} mx-2`}></i>
                <span className={`${active ? "text-primary" : "text-[#A6ADBA] hover:text-primary"}`}>{title}</span>
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

const SideBarMobile = () => {
    return (<div>
        <div className="flex justify-between my-10">
            <div className="avatar">
                <div
                    className="w-full h-[60px] rounded-full border-[2px] border-[#32363b] shadow-md shadow-[#000000]/40">
                    <img
                        src="https://avatars.githubusercontent.com/u/126382033?s=400&u=7687a3f9f1364708dd1c7f9ee1367a48695a9203&v=4" />
                </div>
            </div>
            <div className="">
                <div className="box mx-1 px-4 py-[12px] tooltip tooltip-top cursor-pointer transition duration-700 ease-in-out group/item"
                    data-tip="Facebook">
                    <i className="fab fa-facebook-f font-bold shadow-2xl text-[#A6ADBA] group-hover/item:text-facebook"></i>
                </div>
            </div>
        </div>
    </div>);
}

const container = document.getElementById('sideBarMobile');
const root = ReactDOM.createRoot(container);
root.render(<SideBarMobile />)