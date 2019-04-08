# TableBoard_Shop
게시판-Shop 의 TODO 완성하기!

## 기존 파일
```
 .
├── css - board_form.php와 index.php 에서 사용하는 stylesheet
│   └── ...
├── fonts - 폰트
│   └── ...
├── images - 아이콘 이미지
│   └── ...
├── vender - 외부 라이브러리
│   └── ...
├── js - board_form.php와 index.php 에서 사용하는 javascript
│   └── ...
├── function
│   └── insert.php - 게시글 작성 기능 구현
│   └── update.php - 게시글 수정 기능 구현
│   └── delete.php - 게시글 삭제 기능 구현
├── board_form.php - 게시글 작성/수정 시 사용하는 form이 포함된 php 파일
├── index.php - 게시글 조회 기능 구현
```

## MySQL 테이블 생성!

[여기에 테이블 생성 시, 사용한 Query 를 작성하세요.]
Note: 
- table 이름은 tableboard_shop 으로 생성 

CREATE TABLE tableboard_shop(
    num int not null auto_increment,
    date date.
    order_id int,
    name char(30),
    price double,
    quantity int,
    primary key(num)
    );
    
## index.php 수정
- MySQL 데이터베이스 연동
  - mysql_connect
  - mysql_select_db

- mysql_query() 함수를 이용해서, MySQL 에 쿼리 스트링 전송
  - mysql_query
   
- mysql_fetch_array() 함수를 이용해서, 전달받은 레코드를 가져옴
 
- 여러 정보들을 레코드에 대체하기 위해서 while문을 이용한 mysql_fetch_array() 함수를 이용
  - 이를 이용하여  

## board_form.php 수정
- MySQL 데이터베이스 연동
  - mysql_connect
  - mysql_select_db

- mysql_query() 함수를 이용해서, MySQL 에 쿼리 스트링 전송
  - mysql_query
   
- mysql_fetch_array() 함수를 이용해서, 전달받은 레코드를 가져옴

- update form 인 경우, form 에 정보 표시
  - echo 문을 사용해 불러오기 위한 특정한 값들에 알맞는 row를 호출
  - ex) 68번째 줄 php 구문시작 "echo $row[date]" 

## function
### insert.php 수정
- MYSQL 데이터베이스 연동
  - mysql_connect
  - mysql_select_db
  
- mysql_query() 함수를 이용해서, MySQL 에 쿼리 스트링 전송
  - mysql_query
 
- mysql_fetch_array() 함수를 이용해서, 전달받은 레코드를 가져옴
 
- mysql구문인 insert문을 이용하여 레코드를 생성
  - num값(자동적으로 생성)을 받아서 그 안에 지정된 데이터를 입력

### update.php 수정
- MYSQL 데이터베이스 연동
  - mysql_connect
  - mysql_select_db
  
- mysql_query() 함수를 이용해서, MySQL 에 쿼리 스트링 전송
  - mysql_query
 
- mysql_fetch_array() 함수를 이용해서, 전달받은 레코드를 가져옴
 
- mysql구문인 update문을 이용하여 레코드를 생성
  - num값(자동적으로 생성)을 받아서 그 레코드의 데이터를 호출
  - 바꾸고 싶은 값을 바꾸면 된다.

### delete.php 수정
- MYSQL 데이터베이스 연동
  - mysql_connect
  - mysql_select_db
  
- mysql_query() 함수를 이용해서, MySQL 에 쿼리 스트링 전송
  - mysql_query
 
- mysql_fetch_array() 함수를 이용해서, 전달받은 레코드를 가져옴
 
- mysql구문인 delete문을 이용하여 레코드를 특정 레코드를 지정하여 삭제
