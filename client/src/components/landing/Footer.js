import React, { useState } from 'react'
import { useNavigate } from 'react-router-dom'
import {
    CContainer,
    CRow,
    CCol,
    CImage,
    CForm,
    CFormInput,
    CInputGroup,
    CInputGroupText,
} from '@coreui/react'

const Footer = () => {
    const navigate = useNavigate()

    return (
        <CContainer fluid>
            <footer className="p-2 p-md-5 ">
                <div className="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                    <p>&copy; 2024 Axleshift Core 1. All Rights Reserved</p>
                    <ul className="list-unstyled d-flex">
                        <li className="ms-3">
                            <span
                                className="link-body-emphasis"
                                onClick={() => navigate('/privacy-policy')}
                            >
                                Privacy Policy
                            </span>
                        </li>
                        <li className="ms-3">
                            <span
                                className="link-body-emphasis"
                                onClick={() => navigate('/terms-of-service')}
                            >
                                Terms of Service
                            </span>
                        </li>
                    </ul>
                </div>
            </footer>
        </CContainer>
    )
}

export default Footer
