import axios from 'axios';

const config = {
    protocol: 'http',
    host: 'localhost',
    link_project: 'theme_admin/backend/'
}

const link = config.protocol + '://' + config.host + '/' + config.link_project

const getData = async () => {
    let url = link
    try {
        const res = await axios.get(url)
        console.log('getting data successfully!', res.data)
        return res.data
    } catch (error) {
        console.log(error);
    }
}

export { getData };