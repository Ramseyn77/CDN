import React from 'react'

const InputForm = ({label,onChange,name,value,placeholder, error}) => {
  return (
    <div className='flex flex-col space-y-3 mb-2'>
      <label htmlFor={name} className='text-black font-semibold text-md'>{label}</label>
      <input
        name={name}
        value={value}
        onChange={onChange}
        placeholder={placeholder}
        className={`w-full outline-none border border-2 border-gray-300 rounded-lg text-gray-300 text-sm focus:text-gray-900 focus:border-blue-300 px-2 py-3 sm:text-base md:text-sm ${error ? 'text-red-400 border-red-300': ''} `} 
        required />
    </div>
  )
}

export default InputForm
