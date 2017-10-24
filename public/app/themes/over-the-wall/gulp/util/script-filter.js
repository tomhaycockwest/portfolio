import path from 'path';

const scriptRegEx = /(\.(js|coffee)$)/i;

export default (name) => scriptRegEx.test(path.extname(name));
