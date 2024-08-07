import {React,useState,useEffect} from 'react'
import { useNavigate } from 'react-router-dom'
import axios from 'axios'
import logo from '../logo.svg'
import profil from '../uploads/profile.png'
import {UserCircle} from 'lucide-react'

const CommentCard = ({photo, name, content, key}) => {

    return (
        <div key={key} className='flex flex-col gap-3 px-3 py-2 w-full border-2 border-gray-200 rounded-sm'>
            <div className="flex flex-row inline space-x-6">
                <div className="items-center justify-center flex flex-col">
                    {
                        photo ?(
                            <img src= {'http://localhost:8000/storage/'+photo} alt="photo"  className="h-10 w-10 bg-transparent hover:cursor-pointer rounded-full" />
                        ) : (
                            <UserCircle className="h-10 w-10 bg-transparent hover:cursor-pointer rounded-full" />
                        )
                    }
                </div>
                <div className="flex flex-col items-center justify-center text-md font-bold ">{name}</div>
            </div>
            <div className='flex-1 justify-center text-sm ml-4'>
                {content}
            </div>
        </div>
    )
}

export default CommentCard ;