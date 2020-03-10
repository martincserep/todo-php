--
-- PostgreSQL database dump
--

-- Dumped from database version 12.1
-- Dumped by pg_dump version 12.2

-- Started on 2020-03-10 09:33:19 CET

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 203 (class 1259 OID 16403)
-- Name: tasks; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tasks (
    id smallint NOT NULL,
    uid smallint NOT NULL,
    task character varying(999) NOT NULL,
    deadline date NOT NULL
);


ALTER TABLE public.tasks OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 16395)
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    uid smallint NOT NULL,
    username character varying(33),
    password character varying(999)
);


ALTER TABLE public.users OWNER TO postgres;

--
-- TOC entry 3195 (class 0 OID 16403)
-- Dependencies: 203
-- Data for Name: tasks; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tasks (id, uid, task, deadline) FROM stdin;
\.


--
-- TOC entry 3194 (class 0 OID 16395)
-- Dependencies: 202
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (uid, username, password) FROM stdin;
\.


--
-- TOC entry 3066 (class 2606 OID 16410)
-- Name: tasks tasks_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tasks
    ADD CONSTRAINT tasks_pkey PRIMARY KEY (id);


--
-- TOC entry 3064 (class 2606 OID 16402)
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (uid);


--
-- TOC entry 3067 (class 2606 OID 16411)
-- Name: tasks uid; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tasks
    ADD CONSTRAINT uid FOREIGN KEY (uid) REFERENCES public.users(uid);


-- Completed on 2020-03-10 09:33:20 CET

--
-- PostgreSQL database dump complete
--

