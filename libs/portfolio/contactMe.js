const ContactMe = () => {
    return (
        <div
            className="flex flex-col items-center justify-center transition-all duration-700 ease-in-out"
            id="contacts">
            <div className="justify-center py-10 mx-auto text-center">
                <h4
                    className="justify-center py-1 text-sm font-medium tracking-wide text-center text-primarySub font-montserrat">CONTACT</h4>
                <h2
                    className="text-[#c4cfde] text-6xl font-bold font-montserrat tracking-wide py-5 justify-center text-center">Contact
                    With Me</h2>
            </div>
            <div className="py-10 flex flex-col xl:flex-row justify-between mx-auto w-[75%]">
                <div
                    className="box h-auto w-[28rem] rounded-xl py-5 group/item">
                    <div
                        className="mt-2 mx-[2.8rem] transition-all duration-500 ease-in-out">
                        <div
                            className="justify-center w-full mx-auto overflow-hidden rounded-lg cursor-pointer h-52">
                            <img
                                src='https://avatars.githubusercontent.com/u/126382033?s=400&u=7687a3f9f1364708dd1c7f9ee1367a48695a9203&v=4'
                                alt="image"
                                className="object-cover w-full h-full transition-transform duration-200 ease-in-out group-hover/item:scale-105" />
                        </div>
                        <h2
                            className="fonts-montserrat text-[29px] font-bold text-white text-start my-5">Rayhan
                            Al Shorif</h2>
                        <h3
                            className="my-5 text-lg text-gray-400 fonts-poppins font-base text-start">Software
                            Developer</h3>
                        <h3
                            className="my-5 text-lg text-gray-400 fonts-poppins font-base text-start">I
                            am available for freelance work. Connect
                            with me via and call in to my account.</h3>
                        <h4
                            className="my-5 text-lg text-gray-400 fonts-poppins font-base text-start">
                            Phone: <span
                                className="text-white hover:text-primary">+01234567890</span>
                            <br />
                            Email: <span
                                className="text-white hover:text-primary">rayhanalshorif@gmail.com</span>
                        </h4>
                        <div className="mt-5">
                            <h2
                                className="uppercase text-[14px] text-[#c4cfde] text-start tracking-[2px] font-poppins font-medium my-2">find
                                with me</h2>
                            <div
                                className="flex justify-between mx-0 my-5 xl:mx-0">
                                <div
                                    className="box mx-1 px-4 py-[12px] tooltip tooltip-top cursor-pointer transition duration-700 ease-in-out group/item"
                                    data-tip="facebook">
                                    <i
                                        className="fa-brands fa-facebook-f font-bold shadow-2xl text-[#A6ADBA] group-hover/item:text-facebook"></i>
                                </div>
                                <div
                                    className="box mx-1 px-4 py-[12px] tooltip tooltip-top cursor-pointer transition duration-700 ease-in-out group/item"
                                    data-tip="twitter">
                                    <i
                                        className="fa-brands fa-twitter font-bold shadow-2xl text-[#A6ADBA] group-hover/item:text-twitter"></i>
                                </div>
                                <div
                                    className="box mx-1 px-4 py-[12px] tooltip tooltip-top cursor-pointer transition duration-700 ease-in-out group/item"
                                    data-tip="email">
                                    <i
                                        className="fa-solid fa-envelope font-bold shadow-2xl text-[#A6ADBA] group-hover/item:text-email"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="box h-auto rounded-xl w-[45rem] group/item">
                    <div className="flex flex-col xl:flex-row p-5">
                        <div className="w-full px-5">
                            <h4
                                className="py-2 text-xs tracking-widest uppercase text-start fonts-Montserrat">YOUR
                                NAME</h4>
                            <input type="text"
                                className="w-full h-[50px] rounded-[6px] border-none outline-none bg-[#191B1E] active:border-primary focus:outline-primary px-[20px] py-[10px] 
                                        my-[10px]" />
                        </div>
                        <div className="w-full px-5">
                            <h4
                                className="py-2 text-xs tracking-widest uppercase text-start fonts-Montserrat">PHONE
                                NUMBER</h4>
                            <input type="text"
                                className="w-full h-[50px] rounded-[6px] border-none outline-none bg-[#191B1E] active:border-primary focus:outline-primary px-[20px] py-[10px] my-[10px]" />
                        </div>
                    </div>
                    <div className="w-full px-10">
                        <h4
                            className="py-2 text-xs tracking-widest uppercase text-start fonts-Montserrat">Email</h4>
                        <input type="text"
                            className="w-full h-[50px] rounded-[6px] border-none outline-none bg-[#191B1E] active:border-primary focus:outline-primary px-[20px] py-[10px] 
                                    my-[10px]" />
                    </div>
                    <div className="w-full px-10">
                        <h4
                            className="py-2 text-xs tracking-widest uppercase text-start fonts-Montserrat">SUBJECT</h4>
                        <input type="text"
                            className="w-full h-[50px] rounded-[6px] border-none outline-none bg-[#191B1E] active:border-primary focus:outline-primary px-[20px] py-[10px] 
                                    my-[10px]" />
                    </div>
                    <div className="w-full px-10">
                        <h4
                            className="py-2 text-xs tracking-widest uppercase text-start fonts-Montserrat">YOUR
                            MESSAGE</h4>
                        <textarea
                            className="w-full focus:outline-primary rounded-[6px] border-none outline-none px-3 py-2 text-gray-700 border rounded-lg focus:outline-none bg-[#191B1E]"
                            rows="7"></textarea>

                    </div>
                </div>
            </div>
            <div
                className="xl:hidden col-span-6 xl:col-span-4 2xl:col-span-5 w-full h-full bg-[#000000]/90 absolute z-10 backGroundShadow hidden"></div>
        </div>
    );
}


const container = document.getElementById('contactMe');
const root = ReactDOM.createRoot(container);
root.render(<ContactMe />)