import React from 'react'

const CardC = ({key,number,name,onClick}) => {
  return (
    <button key={key} onClick={onClick} 
    className="flex flex-col sm:flex-row h-[10%] w-[80%] sm:w-[60%] rounded-sm shadow-md hover:bg-gray-200 mb-4 ">
            <div 
            className=" w-[100%] h-[15%] py-2 sm:h-[92px] sm:w-[15%] bg-black items-center rounded-sm justify-center 
            flex text-sm font-bold text-white sm:border-r-2 sm:border-black ">
              {"Chap."+ (number)}
            </div>
            <div 
            className="w-full h-[92px] py-1 px-3 font-semibold flex flex-col space-y-6 justify-center items-center text-sm">
              {name}
            </div>
    </button>
  )
}

export default CardC
