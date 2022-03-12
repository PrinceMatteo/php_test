<?php

return [
    'auth' => [
        'token_not_find' => 'Cannot find token',
        'token_expired' => 'Token is expired',
        'token_invalid' => 'Token is invalid',
        'cannot_parse_token' => 'Cannot parse token',
        'auth_failed' => 'Login failed. Please check username or password',
        'account_locked' => 'Account is locked. Please contact administrator',
        'token_exception' => 'Cannot parser token',
        'module_can_pt' => 'The function is being developed',
        'auth_username_not_exists' => 'Username is not exists',
        'role_not_found' => 'Role user not found',
    ],

    'student' => [
        'join_success' => 'Student joined!',
        'result' => 'Accepted student result!',
        'code_invalid' => 'Access code invalid!',
        'enroll_code_not_found' => 'Không tìm thấy mã ghi danh này',
        'enroll_successfully'   => 'Ghi danh thành công',
        'error_join' => 'Error!',
        'fullname_invalid' => 'Fullname invalid!',
        'token_invalid' => 'Token invalid!',
        'token_not_found' => 'Token not found!',
        'change_pass_success' => 'Cập nhật mật khẩu thành công!',
        'course_grade_not_found' => 'Dữ liệu điểm học sinh không tồn tại!',
    ],
    'admin' => [
        'exist' => 'Dữ liệu đã tồn tại, vui lòng thử lại!',
        'success' => 'Thành công!',
        'fail' => 'Thất bại!',
        'not_found' => 'Không tìm thấy dữ liệu!',
        'data_invalid' => 'Dữ liệu không hợp lệ!',
        'code_invalid' => 'Code invalid!',
        'game' => [
            'create_success' => 'Thêm mới thành công',
            'no_game' => 'Không tồn tại game',
            'update_success' => 'Cập nhật thành công',
        ],
        'user' => [
            'role_not_found' => 'Loại người dùng không hợp lệ. Vui lòng kiểm tra lại !',
            'no_game' => 'Không tồn tại game',
            'no_user' => 'Không tồn tại tài khoản',
            'delete_success' => 'Xóa tài khoản thành công',
            'update_success' => 'Cập nhật tài khoản thành công',
            'password_not_matching' => 'Mật khẩu cũ và mới không giống nhau',
        ],
    ],
    'message' => [
        'param_error' => 'Tham số truyền vào lỗi',
        'param_requered' => 'Vui lòng điền vào thông tin :param',
        'double_code' => 'Mã tài khoản đã tồn tại. Vui lòng sử dụng mã khác',
        'double_username' => 'Tên đăng nhập đã tồn tại. Vui lòng sử dụng tên đăng nhập khác',
        'double_email' => 'Email đã tồn tại. Vui lòng sử dụng email khác',
        'double_phone' => 'Phone đã tồn tại. Vui lòng sử dụng số điện thoại mã khác',
        'missing_params' => 'Thiếu dữ liệu gửi lên'
    ],
    'teacher' => [
        'message' => [
            'create_success' => 'Thêm mới thành công',
            'update_success' => 'Cập nhật thành công',
            'delete_success' => 'Xóa thành công',
            'user_exist' => 'Học viên đã tồn tại trong lớp',
            'enroll_not_found' => 'Ghi danh không tồn tại. Vui lòng load lại trang và thử lại.',
            'game_not_found' => 'Game không tồn tại. Vui lòng thử lại.',
            'game_exist_in_course' => 'Game đã có trong lớp. Vui lòng kiểm tra lại.',
        ],
        'validate' => [
            'double_email' => 'Email đã có người sử dụng. Vui lòng kiểm tra lại'
        ]
    ]
];
