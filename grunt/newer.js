// ============================================================================================= //
//                                         GRUNT - NEWER                                         //
// ============================================================================================= //

module.exports = {
    options: {
        override: function (detail, include) {
            if (detail.task == 'sass') {
                include(true);
            }
            else {
                include(false);
            }
        }
    }
};