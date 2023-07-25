
const Sidebar = () => {
    return (
        <div className="hidden lg:flex lg:flex-col w-[20%] bg-[#212428] border-r-[5px] border-[#000000] h-screen overflow-y-auto">
                <header className="pt-[50px] mx-auto">
                    <div className="avatar">
                        <div
                            className="w-full h-[200px] rounded-full border-[5px] border-[#32363b] shadow-md shadow-[#000000]/40">
                            <img
                                src="https://avatars.githubusercontent.com/u/126382033?s=400&u=7687a3f9f1364708dd1c7f9ee1367a48695a9203&v=4"/>
                        </div>
                    </div>
                </header>
                <div className="pt-5 px-[10px]">
                    <ul
                        className="menu text-base uppercase font-montserrat font-normal tracking-[1px]">
                        <li className="my-1">
                            <a href="#" className="text-primary">
                                <i className="fa-solid fa-house mx-2"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li className="my-1">
                            <a className="hover:text-primary">
                                <i className="fa-solid fa-briefcase mx-2"></i>
                                <span>Features</span>
                            </a>
                        </li>
                        <li className="my-1">
                            <a className="hover:text-primary">
                                <i className="fa-solid fa-layer-group mx-2"></i>
                                <span>Portfolio</span>
                            </a>
                        </li>
                        <li className="my-1">
                            <a className="hover:text-primary">
                                <i className="fa-solid fa-user-group mx-2"></i>
                                <span>Resume</span>
                            </a>
                        </li>
                        <li className="my-1">
                            <a href="./showcase.html" className="hover:text-primary">
                                <i className="fa-solid fa-user mx-2"></i>
                                <span>Showcase</span>
                            </a>
                        </li>
                        <li className="my-1">
                            <a className="hover:text-primary">
                                <i className="fa-solid fa-image mx-2"></i>
                                <span>Blog</span>
                            </a>
                        </li>
                        <li className="my-1">
                            <a className="hover:text-primary">
                                <i className="fa-solid fa-comment mx-2"></i>
                                <span>Contacts</span>
                            </a>
                        </li>
                    </ul>
                    <div
                        className="h-[1px] w-[80%] mx-auto text-center bg-[#383A3E]"></div>
                    <div className="mt-5 px-[30px]">
                        <h2
                            className="uppercase text-[14px] text-[#c4cfde] tracking-[2px] font-poppins font-medium">find
                            with me</h2>
                        <div className="flex justify-between my-2">
                            <div
                                className="social_icon px-4 py-[12px] tooltip tooltip-top cursor-pointer transition duration-700 ease-in-out hover:text-facebook"
                                data-tip="facebook">
                                <i
                                    className="fa-brands fa-facebook-f font-bold shadow-2xl"></i>
                            </div>
                            <div
                                className="social_icon px-4 py-[12px] tooltip tooltip-top cursor-pointer transition duration-700 ease-in-out hover:text-twitter"
                                data-tip="twitter">
                                <i
                                    className="fa-brands fa-twitter font-bold shadow-2xl"></i>
                            </div>
                            <div
                                className="social_icon px-4 py-[12px] tooltip tooltip-top cursor-pointer transition duration-700 ease-in-out hover:text-email"
                                data-tip="email">
                                <i
                                    className="fa-solid fa-envelope font-bold shadow-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    )
}

const container = document.getElementById('sidebar');
const root = ReactDOM.createRoot(container);
root.render(<Sidebar />)